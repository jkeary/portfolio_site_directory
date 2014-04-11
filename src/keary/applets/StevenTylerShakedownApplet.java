package keary.applets;

import java.awt.*;
import java.awt.event.*;

import keary.jmsl.StevenTylerShakedownCollection;

import com.softsynth.jmsl.*;
import com.softsynth.jmsl.view.TextAreaOut;

public class StevenTylerShakedownApplet extends java.applet.Applet implements ActionListener {
	
	TextArea myTextArea;
	Button relevancyButton;
	StevenTylerShakedownCollection stevenTylersMusicJob;
	
	public void init() {
		System.out.println("init");
	}
	
	public void start() {
		System.out.println("'pink is my favorite color' Steven Tyler");
		
		setLayout(new BorderLayout(20, 10));
		setBackground(Color.PINK);
		
		Label myLabel = new Label("Hello, I am James's 1st JMSL Applet (no audio):\n The Steven Tyler Shakedown", Label.CENTER);
		setForeground(Color.BLACK);
		
		Panel p = new Panel();
		p.add(myLabel);
		add(BorderLayout.NORTH, p);
		
		Panel p2 = new Panel();
		p2.add(new Label("'pink is my favorite color' - Steven Tyler"));
		relevancyButton = new Button("I'm still relevant");
		relevancyButton.addActionListener(this);
		p2.add(relevancyButton);
		myTextArea = new TextArea(20, 34);
		p2.add(myTextArea);
		add(BorderLayout.CENTER, p2);
		
		stevenTylersMusicJob = new StevenTylerShakedownCollection(myTextArea);
	}

	public void stop() {
		System.out.println("stop");
		
	}
	
	public void actionPerformed(ActionEvent evt) {
		System.out.println("user clicked Button corresponding to TextArea");
		Object source = evt.getSource();
		if (source == relevancyButton) {
			handlerelevancyButton();
		}
	}		

		void handlerelevancyButton() {
			stevenTylersMusicJob.launch(JMSL.now());
			
	}		

}
