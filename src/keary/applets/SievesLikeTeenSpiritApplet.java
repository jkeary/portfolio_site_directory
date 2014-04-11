package keary.applets;

import java.awt.BorderLayout;
import java.awt.Button;
import java.awt.Color;
import java.awt.Panel;
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
 * Applet Function:
 * Use a SequentialCollection to play a composition with sieves
 * with a JSyn SynthNote instrument.  Pitches are chosen by Xenakis sieves.  
 * Rhythm of melody is to Nirvana's Smells Like Teen Spirit.
 * 
 * composition by James Keary, based on code by Nick Didkovsky.
 * Dec 13th 2011
 */
public class SievesLikeTeenSpiritApplet extends java.applet.Applet implements ActionListener {
	
	Button startButton;
	
    JMSLMixerContainer mixer;
    Instrument instrument;

    SequentialCollection mySong;
    
    Sieve a = new Sieve(24);
    Sieve b = new Sieve(24);
    
	public void init() {
        JMSL.setIsApplet(true);
    }

    public void start() {		
        synchronized (JMSL.class) {
            initJMSL();
            initMusicDevices();
            buildMixer();
            buildInstrument();
            buildSong();
            
            setLayout(new BorderLayout(20, 10));
			setBackground(Color.GRAY);
			
			startButton = new Button("Start");
			startButton.addActionListener(this);

			Panel p1 = new Panel();
			p1.add(startButton);
			add(BorderLayout.CENTER, p1);
 //           launchSong();
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
        instrument = new JSynInsFromClassName(8, com.softsynth.jsyn.circuits.FilteredSawtoothBL.class.getName());
        mixer.addInstrument(instrument);
    }
    
    protected void buildSong() {
    	a.filter(4, 8);
    	b.filter(3, 5);
    	Sieve c = Sieve.union(a, b);
    	
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
    	
        MusicShape prechorus = new MusicShape(instrument.getDimensionNameSpace());
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
		for(int i = 0; i<64; i++) {
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

	public void actionPerformed(ActionEvent evt) {
		Object source = evt.getSource();
		if (source == startButton) {
			launchSong();
		}
	}
}
