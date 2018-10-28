package keary.synthnotes;

import com.softsynth.jsyn.SineOscillator;
import com.softsynth.jsyn.SynthNote;

public class SineSynthNote extends SynthNote {
//SynthNotes are like guitar pedals, little boxes that you can put whatever in.  has inputs and outputs and things you can control.  usually you put an oscillator in there
	
	SineOscillator osc;
	
	public SineSynthNote() {
//		osc = new SineOscillator();
//		add(osc);  
//or do these two above lines in one line (below)
		add(osc = new SineOscillator());
		
		addPort(frequency = osc.frequency);
		addPort(amplitude = osc.amplitude);
		addPort(output = osc.output);
// frequency, amp, and out are already assigned in SynthNote

		frequency.setup(1, 440, 1000);
		amplitude.setup(0, .5, 1);
		
	}
	 //turning sound on and off with stages
    public void setStage( int time, int stage )
    {
        switch( stage )
        {
        case 0:
            start( time );
            break;
        case 1:
            break;
        default:
            break;
        }
    }
}
