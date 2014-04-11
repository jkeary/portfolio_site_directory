package keary.applets;

import java.awt.BorderLayout;
import java.awt.Button;
import java.awt.Color;
import java.awt.Label;
import java.awt.Panel;
import java.awt.TextArea;
import java.awt.TextField;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import com.softsynth.jmsl.EventScheduler;
import com.softsynth.jmsl.Instrument;
import com.softsynth.jmsl.JMSL;
import com.softsynth.jmsl.JMSLMixerContainer;
import com.softsynth.jmsl.JMSLRandom;
import com.softsynth.jmsl.MusicShape;
import com.softsynth.jmsl.SequentialCollection;
import com.softsynth.jmsl.jsyn.JSynInsFromClassName;
import com.softsynth.jmsl.jsyn.JSynMusicDevice;

/**
 * Final Project for Java Music Systems Class
 * 
 * Applet Function: Use a SequentialCollection to play a composition with sieves
 * with a JSyn SynthNote instrument. Pitches are chosen by Xenakis sieves.
 * Rhythm of melody is to Nirvana's Smells Like Teen Spirit.  User inputs sieves 
 * to get their collection of pitches that will be used for the composition.  
 * 
 * code by James Keary, based on code by Nick Didkovsky. Dec 13th 2011
 */
public class SievesApplet extends java.applet.Applet implements ActionListener {

	private static final long serialVersionUID = 1L;
	
	Label myLabel;
	Label myLabel1;
	Label myLabel2;
	Label myLabel3;
	Label myLabel4;
	Label myLabel5;
	Label myLabel6;
	Label myLabel7;
	Label myLabel8;
	
	Button startButton;
	Button stopButton;
	Button sieveA;
	Button sieveB;
	Button union;
	Button intersect;
	Button negateA;
	Button negateB;
	Button storetoA;
	Button storetoB;
	
	TextField myTextField;
	TextField myTextField1;
	TextField myTextField2;
	TextField myTextField3;
	TextField myTextField4;
	TextField myTextField5;

	TextArea myTextArea;
	TextArea myTextArea1;
	TextArea myTextArea2;
	
	Sieve a;
	Sieve b;
	Sieve c;

	// JMSL part
	JMSLMixerContainer mixer;
	Instrument instrument;

	SequentialCollection mySong;

	public boolean[] isMember;

	public void init() {
		JMSL.setIsApplet(true);
	}

	public void start() {
		synchronized (JMSL.class) {
			initJMSL();
			initMusicDevices();
			buildMixer();
			buildInstrument();

			setLayout(new BorderLayout(20, 10));
			setBackground(Color.BLUE);

			// north
			myLabel = new Label(
					"Sieves Like Teen Spirit\nMelody creation using a familiar vocal rhythm and song structure",
					Label.CENTER);
			setForeground(Color.BLACK);

			Panel p = new Panel();
			p.add(myLabel);
			add(BorderLayout.NORTH, p);

			// center
			startButton = new Button("Start");
			startButton.addActionListener(this);

			stopButton = new Button("Stop");
			stopButton.addActionListener(this);

			Panel p1 = new Panel();
			p1.add(startButton);
			p1.add(stopButton);
			add(BorderLayout.CENTER, p1);

			// west
			myLabel1 = new Label("modulus");
			myTextField = new TextField("24", 2);
			setForeground(Color.BLACK);
			myLabel2 = new Label("pitch center");
			myTextField1 = new TextField("4", 2);
			setForeground(Color.BLACK);
			myLabel3 = new Label("residue class");
			setForeground(Color.BLACK);
			myTextField2 = new TextField("8", 2);

			sieveA = new Button("sieve A");
			sieveA.addActionListener(this);

			myTextArea = new TextArea(" ", 6, 10);

			Panel p2 = new Panel();
			p2.add(myLabel1);
			p2.add(myTextField);
			p2.add(myLabel2);
			p2.add(myTextField1);
			p2.add(myLabel3);
			p2.add(myTextField2);
			p2.add(sieveA);
			p2.add(myTextArea);
			add(BorderLayout.WEST, p2);

			// east
			myLabel2 = new Label("sieve B", Label.CENTER);
			setForeground(Color.BLACK);

			myLabel4 = new Label("modulus");
			myTextField3 = new TextField("24", 2);
			setForeground(Color.BLACK);
			myLabel5 = new Label("pitch center");
			myTextField4 = new TextField("3", 2);
			setForeground(Color.BLACK);
			myLabel6 = new Label("residue class");
			setForeground(Color.BLACK);
			myTextField5 = new TextField("5", 2);

			sieveB = new Button("sieve B");
			sieveB.addActionListener(this);

			myTextArea1 = new TextArea(" ", 6, 10);

			Panel p3 = new Panel();
			p3.add(myLabel4);
			p3.add(myTextField3);
			p3.add(myLabel5);
			p3.add(myTextField4);
			p3.add(myLabel6);
			p3.add(myTextField5);
			p3.add(sieveB);
			p3.add(myTextArea1);
			add(BorderLayout.EAST, p3);

			// south
			union = new Button("UNION");
			union.addActionListener(this);
			
			intersect = new Button("INTERSECT");
			intersect.addActionListener(this);
			
			negateA = new Button("NEGATION OF A");
			negateA.addActionListener(this);
			
			negateB = new Button("NEGATION OF B");
			negateB.addActionListener(this);
			
			storetoA = new Button("STORE TO A");
			storetoA.addActionListener(this);
			
			storetoB = new Button("STORE TO B");
			storetoB.addActionListener(this);
			
			myTextArea2 = new TextArea(
					"sieve C:\na complex sieve formed from the Boolean operation\nof your choice performed on sieves a and b. Union\ntakes all elements. Intersect takes like\nelements. Negate take unlike elements\nfrom one sieve.",
					6, 35);

			Panel p4 = new Panel();
			p4.add(union);
			p4.add(intersect);
			p4.add(negateA);
			p4.add(negateB);
			p4.add(storetoA);
			p4.add(storetoB);
			p4.add(myTextArea2);
			add(BorderLayout.SOUTH, p4);
		}
	}

	private void initJMSL() {
		JMSL.scheduler = new EventScheduler();
		JMSL.scheduler.start();
		JMSL.clock.setAdvance(0.1);
	}

	private void initMusicDevices() {
		JSynMusicDevice.instance().open();
	}

	private void buildMixer() {
		mixer = new JMSLMixerContainer();
		mixer.start();
	}

	private void buildInstrument() {
		instrument = new JSynInsFromClassName(8,
				com.softsynth.jsyn.circuits.FilteredSawtoothBL.class.getName());
		mixer.addInstrument(instrument);
	}
	
	public void actionPerformed(ActionEvent evt) {
		System.out.println();
		Object source = evt.getSource();
		if (source == startButton) {
			buildSong();
			launchSong();
		}
		if (source == stopButton) {
			mySong.halt();
		}
		if (source == sieveA) {
			handleSieveA();
		}
		if (source == sieveB) {
			handleSieveB();
		}
		if (source == union) {
			handleUnion();
		}
		if (source == intersect) {
			handleIntersect();
		}
		if (source == negateA) {
			handleNegateA();
		}
		if (source == negateB) {
			handleNegateB();
		}
		if (source == storetoA) {
			handlestoretoA();
		}
		if (source == storetoB) {
			handlestoretoB();
		}
	}
			private void handleSieveA() {
				// get sieve A's modulus (cycle), pitch center (starting note), and residue class (interval leap)
				System.out.println("user clicked Button corresponding to sieve A");
				String userInput = myTextField.getText();
				int modA = (new Integer(userInput)).intValue();
				String userInput1 = myTextField1.getText();
				int pcA = (new Integer(userInput1)).intValue();
				String userInput2 = myTextField2.getText();
				int rcA = (new Integer(userInput2)).intValue();
				// construct basic sieves here
				a = new Sieve(modA);
				a.filter(pcA, rcA);
				// display sieve A's array			
				myTextArea.setText(a.toString());
			}

				
			
			private void handleSieveB() {
				// get sieve B's modulus (cycle), pitch center (starting note), and residue class (interval leap)
				String userInput3 = myTextField3.getText();
				int modB = (new Integer(userInput3)).intValue();
				String userInput4 = myTextField4.getText();
				int pcB = (new Integer(userInput4)).intValue();
				String userInput5 = myTextField5.getText();
				int rcB = (new Integer(userInput5)).intValue();
				// how many elements are in the sieve's array?
				// construct basic sieves here
				b = new Sieve(modB);
				b.filter(pcB, rcB);
				// display sieve A's array			
				myTextArea1.setText(b.toString());	
			}
			
			
			private void handleUnion() {	
				c = Sieve.union(a, b);
				myTextArea2.setText(c.toString());
			}
			
			private void handleIntersect() {
				c = Sieve.intersect(a, b);
				myTextArea2.setText(c.toString());
			}
			
			private void handleNegateA() {
				c = a.clone();
				c.negate();
				myTextArea2.setText(c.toString());
			}
			
			private void handleNegateB() {
				c = b.clone();
				c.negate();
				myTextArea2.setText(c.toString());
			}
			
			private void handlestoretoA() {
				myTextArea2.setText("");
				myTextArea.setText(c.toString());
				a = c;
			}
			
			private void handlestoretoB() {
				myTextArea2.setText("");
				myTextArea1.setText(c.toString());
				b = c;
			}
			
	protected void buildSong() {
		MusicShape verse = new MusicShape(4);
		verse.setInstrument(instrument);
		verse.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.5, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.45, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.7, 60 + c.chooseValue(), 0.6, 0.4);
		verse.add(0.25, 0, 0.6, 0.25);
		verse.add(0.5, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.3, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.7, 60 + c.chooseValue(), 0.6, 0.5);
		verse.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.5, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.45, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.7, 60 + c.chooseValue(), 0.6, 0.4);
		verse.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.5, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		verse.add(0.7, 60 + c.chooseValue(), 0.6, 0.5);
		verse.setRepeats(2);

		MusicShape prechorus = new MusicShape(
				instrument.getDimensionNameSpace());
		prechorus.setInstrument(instrument);
		prechorus.add(.25, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.7, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.3, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.7, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.25, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.6, 60 + c.chooseValue(), 0.5, 0.5);
		prechorus.add(.2, 60 + c.chooseValue(), 0.5, 0.25);
		prechorus.add(.25, 60 + c.chooseValue(), 0.5, 0.25);
		prechorus.add(.3, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.5, 60 + c.chooseValue(), 0.5, 0.5);
		prechorus.add(0.25, 0, 0.6, 0.25);
		prechorus.add(.25, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.7, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.3, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.7, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.25, 60 + c.chooseValue(), 0.5, 0.75);
		prechorus.add(.7, 60 + c.chooseValue(), 0.5, 1);
		prechorus.add(0.5, 0, 0.6, 0.25);

		MusicShape chorus = new MusicShape(4);
		chorus.setInstrument(instrument);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.45, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.7, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.45, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.7, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.4, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.7, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.25, 60 + c.chooseValue(), 0.6, 0.25);
		chorus.add(0.45, 60 + c.chooseValue(), 0.6, 0.5);
		chorus.add(0.7, 60 + c.chooseValue(), 0.6, 0.5);

		MusicShape solo = new MusicShape(4);
		solo.setInstrument(instrument);
		for (int i = 0; i < 64; i++) {
			double dur = 0.1;
			double pitch = 60 + c.chooseValue();
			double amp = 0.6;
			double hold = dur + JMSLRandom.choose(-0.2, 0.2);
			solo.add(dur, pitch, amp, hold);
		}

		MusicShape rest = new MusicShape(4);
		rest.add(1.0, 0, 0, 0);

		MusicShape outro = new MusicShape(4);
		outro.setInstrument(instrument);
		outro.add(0.3, 60 + c.chooseValue(), 0.6, .25);
		outro.add(0.8, 60 + c.chooseValue(), 0.6, .5);
		outro.add(0.8, 60 + c.chooseValue(), 0.6, .5);
		outro.add(0.8, 60 + c.chooseValue(), 0.6, 4.0);

		mySong = new SequentialCollection();
		mySong.add(verse);
		mySong.add(prechorus);
		mySong.add(chorus);
		mySong.add(verse);
		mySong.add(prechorus);
		mySong.add(chorus);
		mySong.add(solo);
		mySong.add(rest);
		mySong.add(verse);
		mySong.add(prechorus);
		mySong.add(chorus);
		mySong.add(chorus);
		mySong.add(outro);
	}

	private void launchSong() {
		mySong.launch(JMSL.now());
	}

	public void stop() {
		synchronized (JMSL.class) {
			mySong.finishAll();
			try {
				mySong.waitForDone();
			} catch (InterruptedException e) {
				e.printStackTrace();
			}
			JMSL.scheduler.stop();
			JMSL.closeMusicDevices();
		}
	}

	
}
