package keary.synthnotes;
import java.io.*;
import com.softsynth.jsyn.*;
/**************
** WARNING - this code automatically generated by Wire.
** The real source is probably a Wire patch.
** Do NOT edit this file unless you copy it to another directory and change the name.
** Otherwise it is likely to get clobbered the next time you
** export Java source code from Wire.
**
** Wire is available from: http://www.softsynth.com/wire/
*/
public class MyFMPair extends SynthNote
{
    // Declare units and ports.
    SineOscillator modOsc;
    SineOscillator carrierOsc;
    AddUnit add;
    public SynthInput modAmp;
    public SynthInput Fm;
    public SynthInput Fc;
    DivideUnit div;
    MultiplyUnit mult;
    SynthEnvelope envelope;
    EnvelopePlayer envPlay;
    SynthEnvelope envelope2;
    EnvelopePlayer envPlay2;

    public MyFMPair()
    {
        this( Synth.getSharedContext() );
    }
    public MyFMPair( SynthContext synthContext )
    {
        super( synthContext );
        // Create unit generators.
        frequency = new SynthDistributor( this, "frequency" );
        add( modOsc = new SineOscillator(synthContext) );
        add( carrierOsc = new SineOscillator(synthContext) );
        add( add = new AddUnit(synthContext) );
        add( div = new DivideUnit(synthContext) );
        add( mult = new MultiplyUnit(synthContext) );
        double[] envelopeData = {
            0.1, 1.0, 
            0.5, 0.2, 
            0.5, 0.0, 
        };
        envelope = new SynthEnvelope( synthContext, envelopeData );
        envelopeData = null;
        envelope.setSustainLoop( -1, -1 );
        envelope.setReleaseLoop( -1, -1 );
        add( envPlay = new EnvelopePlayer(synthContext) );
        double[] envelope2Data = {
            0.1, 1.0, 
            0.5, 0.2, 
            0.5, 0.0, 
        };
        envelope2 = new SynthEnvelope( synthContext, envelope2Data );
        envelope2Data = null;
        envelope2.setSustainLoop( -1, -1 );
        envelope2.setReleaseLoop( -1, -1 );
        add( envPlay2 = new EnvelopePlayer(synthContext) );
        // Connect units and ports.
        frequency.connect( add.inputB);
        frequency.connect( div.inputA);
        frequency.setup( 0.0, 164.81425187139232, 3000.0 );

        addPort( amplitude = envPlay2.amplitude, "amplitude" );
        amplitude.setup( 0.0, 0.5, 1.0 );
        addPort( output = carrierOsc.output, "output" );
        modOsc.phase.set( 0, -0.015419501133797843 );
        modOsc.output.connect( add.inputA);
        carrierOsc.phase.set( 0, -0.28325170742274614 );
        add.output.connect( carrierOsc.frequency);

        addPort( modAmp = envPlay.amplitude, "modAmp" );
        modAmp.setup( 0.0, 1000.0, 1000.0 );

        addPort( Fm = mult.inputB, "Fm" );
        Fm.setup( 0.0, 0.0, 10.0 );

        addPort( Fc = div.inputB, "Fc" );
        Fc.setup( 1.0, 0.0, 10.0 );
        div.output.connect( mult.inputA);
        mult.output.connect( modOsc.frequency);
        envPlay.rate.set( 0, 1.0 );
        envPlay.output.connect( modOsc.amplitude);
        envPlay2.rate.set( 0, 1.0 );
        envPlay2.output.connect( carrierOsc.amplitude);
    }
    
    public void setStage( int time, int stage )
    {
        switch( stage )
        {
        case 0:
            envPlay.envelopePort.clear( time );
            envPlay.envelopePort.queueOn( time, envelope );
            envPlay2.envelopePort.clear( time );
            envPlay2.envelopePort.queueOn( time, envelope2 );
            start( time );
            break;
        case 1:
            envPlay.envelopePort.queueOff( time, envelope );
            envPlay2.envelopePort.queueOff( time, envelope2 );
            break;
        default:
            break;
        }
    }
}
