package keary.applets;

import java.awt.BorderLayout;

import com.softsynth.jsyn.LineOut;
import com.softsynth.jsyn.SineOscillator;
import com.softsynth.jsyn.Synth;
import com.softsynth.jsyn.circuits.FilteredSawtoothBL;
import com.softsynth.jsyn.view11x.SoundTester;

public class FirstJSynApplet extends java.applet.Applet {
	
	FilteredSawtoothBL mySynthNote;
	LineOut out;
	
	public void start() {
		
		Synth.startEngine(0);
		mySynthNote = new FilteredSawtoothBL();
		out = new LineOut();
		mySynthNote.output.connect(out.input);
		
		mySynthNote.start();
		out.start();
		
		mySynthNote.frequency.set(880);
		mySynthNote.amplitude.set(1.0);
		
	// this (above) is a sine oscillator directly connected to a line out, with a set freq and amplitude.  But it gets messy when you have several oscillators and filters etc.  the code gets dense
		
		setLayout(new BorderLayout());
		add(new SoundTester(mySynthNote));
	}
	
	public void stop() {
		Synth.stopEngine();
	}
}