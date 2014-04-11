package keary.applets;


import com.softsynth.jsyn.*;
import java.awt.*;
import java.awt.event.*;
import com.softsynth.jsyn.view11x.SoundTester;
import keary.synthnotes.*;

/**
 * RingMod_Applet.java
 * 
 * Play a SynthNote in an Applet using SoundTester
 * 
 */

public class RingMod_Applet extends java.applet.Applet {

	RingMod mySynthNote;
	LineOut myOut;
	
/* set up GUI */
public void init() {
}

/*
 * Setup synthesis.
 */
	public void start()
	{
/* Start synthesis engine. */
		Synth.startEngine( 0 );

/* Make waveform unit generators. */
		mySynthNote = new RingMod();
		myOut = new LineOut();
		
/* Create a SoundTester panel and add to layout */
		SoundTester soundTesterPanel = new SoundTester(mySynthNote);
		add(soundTesterPanel);
		
/* Connect oscillator to both channels of stereo player. */
		mySynthNote.output.connect( 0, myOut.input, 0 );
		mySynthNote.output.connect( 0, myOut.input, 1 );
		
/* Start execution of units. */
		myOut.start();
		
		getParent().validate();
		getToolkit().sync();
}
	

public void stop()
	{
/* remove any gui components we may have added */
		removeAll();
/* Turn off tracing. */
		Synth.setTrace( Synth.SILENT );
/* Stop synthesis engine. */
		Synth.stopEngine();
	}


/* Can be run as either an application or as an applet. */
    public static void main(String args[])
    {
    	MyEnvelopedSawTritoImpApplet applet = new MyEnvelopedSawTritoImpApplet();
	AppletFrame frame = new AppletFrame("Play a SynthNote", applet);
	frame.setSize(600, 400);
	frame.show();
/* Begin test after frame opened so that DirectSound will use Java window. */
	frame.test(); // short for applet.init(); applet.start();
    }
}
