package keary.applets;

import com.softsynth.jsyn.*;
import java.awt.*;
import java.awt.event.*;

/**
 * MySawTritoImpAppletEB.java
 * 
 * Post a bunch of random SynthNotes in the future by hitting a awt.Button
 * Uses Event Buffer to post notes in future
 * 
 * @author James Keary, jpk349@nyu.edu
 * Based on applet by Prof. Nick Didkovsky, didkovn@mail.rockefeller.edu
 * (C) 2001 Nick Didkovsky
 *
 */

public class MySawTritoImpAppletEB extends MySawTritoImpApplet implements ActionListener {

Button bangButton;
Button boomButton;
Button bopButton;

public void start() {
	super.start();
	
	add(bangButton = new Button("BANG"));
	bangButton.addActionListener(this);
	getParent().validate();
	getToolkit().sync();
	
	add(boomButton = new Button("BOOM"));
	boomButton.addActionListener(this);
	getParent().validate();
	getToolkit().sync();
	
	add(bopButton = new Button("BOP"));
	bopButton.addActionListener(this);
	getParent().validate();
	getToolkit().sync();
}

void oneRandomNote(int time) throws SynthException {
	double freq = Math.random() * 500.0 + 200.0;  // frequency between 200 and 700 Hz
	double amp = Math.random(); // some amplitude 0.0 .. 1.0
	mySynthNote.noteOn(time, freq, amp);
	}
	
void oneRandomNote1(int time) throws SynthException {
	double freq = Math.random() * 50.0 + 20.0;  // frequency between 20 and 70 Hz
	double amp = Math.random(); // some amplitude 0.0 .. 1.0
	mySynthNote.noteOn(time, freq, amp);	
	}

void oneRandomNote2(int time) throws SynthException {
	double freq = Math.random() * 5000.0 + 2000.0;  // frequency between 2000 and 7000
	double amp = Math.random(); // some amplitude 0.0 .. 1.0
	mySynthNote.noteOn(time, freq, amp);	
}

/* Post 24 random notes in the future, 1/8 sec interval */
void handleBang() {
	int when = Synth.getTickCount();
	for (int i=0; i<24; i++) {
		when += (int)(Synth.getTickRate() / 8);  // 8 notes per sec
		oneRandomNote(when);
	}
}

/* Post 10 random notes in the future, 1/4 sec interval */	
void handleBoom() {
	int when = Synth.getTickCount();
	for (int i=0; i<10; i++) {
		when += (int)(Synth.getTickRate() / 4);  // 4 notes per sec
		oneRandomNote1(when);
	}
}

/* Post 4 random notes in the future, 1/4 sec interval */	
void handleBop() {
	int when = Synth.getTickCount();
	for (int i=0; i<4; i++) {
		when += (int)(Synth.getTickRate() / 4);  // 4 notes per sec
		oneRandomNote2(when);
	}
}
public void actionPerformed(ActionEvent e) {
	Object source = e.getSource();
	if (source == bangButton)  handleBang();
	if (source == boomButton)  handleBoom();
	if (source == bopButton)  handleBop();
}


}
 