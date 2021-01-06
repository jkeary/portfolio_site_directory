<?php 
  require_once('header.php');
  include_once("analyticstracking.php"); 
  define('PAGE', '');
  include_once("navbar.php");
?>
<body>
  <div id="wrap">
    
    <div class="container" style="max-width:1000px">
      
      <div class="page-header-custom">
        <h1 class="text-left"><a href="./sounddesigner.php"><span class="glyphicon glyphicon-headphones"></span></a> Medical Imaging Sonification</h1>
      </div>

      <p class="li_lead_space">With X-Ray, Magnetic Resonance Imaging (MRI) and Positron Emission Tomography (PET) scanners, doctors are able to <i>see</i> diseases inside the human body as they are occuring.  However, in the case Alzheimer's dementia, diagnoses of its early stages cannot be reached by doctors based on visual analysis of the data alone: perceptual and cognitive errors occur all the time.  As the field of medical imaging infomatics expands, and data sets become larger with higher resolution, one of the problems medical researchers face is coming up with new ways of interpreting the data in the hopes that perhaps we will catch something that we missed with our eyes.</p>

      <br/><br/>

    </div>

    <div class="page_breaker">
      <img src="imgs/PET-SCAN.png" class="img-responsive centerimg" style="padding:0px" alt="Responsive image"></img>
    </div>

    <div class="container" style="max-width:1000px">    
    <br/><br/>    
      <div class="row">
        <div class="col-sm-6"> 
          <h4 class="text-center">Medical Imaging</h4>
          <img src="imgs/Schematic_Diagram_of_PET_Scanner.png" class="img-responsive img-rounded centerimg" alt="Responsive image"></img>
          <p class="li_lead_space">One form of medical imaging is Positron Emission Tomography.  A PET scanner consists of a ring of gamma ray detectors. Prior to scanning, the patient is injected with a radioactive substance to enduce a low level nuclear reaction, emitting gamma rays.  Each event of incoming gamma rays to each detector is logged. From this, a 3-dimensional image of locations of the annihilation reactions can be reconstructed.</p>
        </div>
        <div class="col-sm-6">  
          <h4 class="text-center">Sonification</h4>
          <img src="imgs/image9-31.png" class="img-responsive img-rounded centerimg" style="max-width:260px" alt="Responsive image"></img>
          <p class="li_lead_space">Sonification is the representation of data as sound.  Different auditory parameters such as tempo, pitch or volume can be mapped to different streams of data such as stock market information or weather patters.  It is applied in the field of medicine all the time, the earliest example being the stethescope which doctors use to hear the rhythm of the heart.</p>
        </div>
      </div>

      <br/><br/>
      <img src="imgs/brainscan2sound.png" class="img-responsive img-rounded centerimg_lg" alt="Responsive image"></img>
      <br/><br/>

      <h4>Sound Design of Brain Scans</h4>
      <p class="li_lead_space">My job for this project was as sound designer.  The main question I was hired to answer was how to sonify the data in a meaningful way.</p>

      <br/>

      <div class="row">
        <div class="col-sm-4"> 
          <h4 class="text-center">Data Sets</h4>
          <img src="imgs/dataset.png" class="img-responsive img-rounded centerimg" style="max-width:290px" alt="Responsive image"></img>
          <p class="li_lead_space">Datasets were obtained from the NYU Langone Medical Center Radiology Department.  Each de-identified PET/CT scan had been diagnosed with varying stages of Alzheimer’s disease.  each 3D full dataset is 86x100x86 voxels, with each voxel representing an radiation intensity value corresponding to a physical size of 2x2x2 mm.  Subsets of 2D lateral slices are 86x100 voxels.</p>
        </div>
        <div class="col-sm-4"> 
          <h4 class="text-center">Modes</h4>
          <img src="imgs/HowtoSonifyData.png" class="img-responsive img-rounded centerimg" alt="Responsive image"></img>
          <p class="li_lead_space">The first question to answer was how to traverse through the data set.  2 different modes of sonification were developed: scanning and simultaneous play mode.  Scanning sonifications would move across a dataset in one direction over time, left to right or up to down.  Simultaneous sonifications would play all data points at once: it could be selective to a particular region of the brain, or the entire dataset.</p>
        </div>
        <div class="col-sm-4">  
          <h4 class="text-center">Mappings</h4>
          <img src="imgs/BrainOrchestra.png" class="img-responsive img-rounded centerimg" alt="Responsive image"></img>
          <p class="li_lead_space">The next question was which auditory parameter should be mapped to the data.  Over the course of this project many different mappings were prototyped and tested, including amplitude mapping, frequency mapping, pitch class mapping and spatialization mapping.  For more information see the publication, <a href="http://icad2013.com/paper/12_S3-4_Roginska.pdf" target="_tab">"Exploring Sonification for Augmenting Brain Scan Data"</a>.</p>
        </div>
      </div>

      <br/>

      <h4>Instrument to Intensity Sonifications</h4>

      <br/>
      <img src="imgs/inst2int.png" class="img-responsive img-rounded centerimg" alt="Responsive image"></img>

      <p class="li_lead_space">Here is an example of one sonification mode that was deemed too uninformative early on, despite how entertaining the pieces were.  In this sonification technique, the spectrum of gamma ray radiation intensity values is divided to 4 regions for 4 different orchestral instruments.  The pitch of the instruments are mapped to the y-axis.</p>

      <p class="li_lead" style="text-align:center">Panning Mode sonifications of a 3D dataset.  Listen with headphones or stereo speakers for stereo panning experience.</p>

      <br/>
      
      <div class="row">  
        <div class="col-sm-6">  
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/TC2rM9alJfg?list=PLd3BKXsw0RMdDFnA_QXNe4lTujW35Uqoq" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with no Alzheimer's dementia.  <br/>Instrumentation - Contrabasses, Piano, Flutes and Harp.  </p>
        </div>

        <div class="col-sm-6">  
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/kOIMzLeWeZ0?list=PLd3BKXsw0RMdDFnA_QXNe4lTujW35Uqoq" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with Mild Alzheimer's dementia.  <br/>Instrumentation - Contrabasses, Piano, Synthesizer, and French Horn.</p>
        </div>
      </div>

      <div class="row">  
        <div class="col-sm-6"> 
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/xMKOP42WiKA?list=PLd3BKXsw0RMdDFnA_QXNe4lTujW35Uqoq" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with Moderate Alzheimer's dementia.  <br/>Instrumentation - Piano, Synthesizer, Vibraphone and Harp </p>
        </div>
        <div class="col-sm-6">  
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/UoytZPl9a5Q?list=PLd3BKXsw0RMdDFnA_QXNe4lTujW35Uqoq" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with Severe Alzheimer's dementia.  <br/>Instrumentation - Piano, Marimba, Synthesizer and Violins</p>
        </div>
      </div>
      
      <p class="li_lead">More sonifications created using the instrument to intensity mapping can be found at <a href="https://soundcloud.com/sonisounds" target="_tab">https://soundcloud.com/sonisounds</a> or the <a href="https://www.youtube.com/playlist?list=PLd3BKXsw0RMdDFnA_QXNe4lTujW35Uqoq" target="_tab">NYU Medical Imaging Sonification Youtube Account</a>.</p>

      <br/>
      <h4>Triple-Tone Sonifications</h4>
      
      <br/>
      <img src="imgs/tripletonesonification.png" class="img-responsive img-rounded centerimg" alt="Responsive image"></img>

      <p class="li_lead_space">Alzheimer’s Disease is characterized by decreased metabolic activity primarily in the parietal lobe and frontal lobe, while generally leaving the sensorimotor cortex unaffected. In order for a sonification technique to directly target the diagnosis of Alzheimer’s disease, this difference in metabolic activity between the lobes of interest (frontal and parietal) and the reference lobe (sensorimotor cortex) should be mapped to an obvious auditory parameter.  To do so, we assigned one triangle wave oscillator to each lobe.  The three oscillators beat at slightly different frequencies, producing a rhythmic beating pattern unique to the particular brain scan.  Such a mapping leverages humans aural sensitivity to beating patterns for the purpose of diagnosis.  Software I developed for prototyping this sonification method can be found <a href="http://jameskeary.com/soni_gui_proj.php" target="_tab">here</a>.</p>

      <br/>

      <div class="row">  
        <div class="col-sm-6">  
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/cnyhiEKf28M?list=PLd3BKXsw0RMe6v0P9siZ3wraV0CalxWTe"  frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with no Alzheimer's dementia.</p>
        </div>
        
        <div class="col-sm-6">  
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/gWl7bEYZC24?list=PLd3BKXsw0RMe6v0P9siZ3wraV0CalxWTe" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with Mild Alzheimer's dementia.</p>
        </div>
      </div>
      <div class="row">  
        <div class="col-sm-6"> 
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/hqq9TS_mAyg?list=PLd3BKXsw0RMe6v0P9siZ3wraV0CalxWTe" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with Moderate Alzheimer's dementia.</p>
        </div>

        <div class="col-sm-6">  
          <iframe width="80%" height="315" class="center_video" src="//www.youtube.com/embed/ZjHg1D2E1CI?list=PLd3BKXsw0RMe6v0P9siZ3wraV0CalxWTe" frameborder="0" allowfullscreen></iframe>
          <p class="caption">Sonification of brain with Severe Alzheimer's dementia.</p>
        </div>
      </div>

      <p class="li_lead">All Triple-Tone Sonifications can be found at the <a href="https://www.youtube.com/playlist?list=PLd3BKXsw0RMe6v0P9siZ3wraV0CalxWTe" target="_tab">NYU Medical Imaging Sonification Youtube Account</a>.</p>

      <br/>

      <h5>Publications</h5>
      <ul>
        <li class="li_lead">Agnieszka Roginska, Mohanraj Hariharan, James Keary, Kent Friedman, <a href="./docs/SONIFICATION METHOD TO ENHANCE THE DIAGNOSIS OF DEMENTIA.pdf" target="_tab">"Sonification Method to Enhance the Diagnosis of Dementia"</a>, Proceedings of the 20th <a href="http://icad.org/" target="_tab">International Conference on Auditory Display</a> (ICAD 2014). New York, New York, June 2014.</li>
        <li class="li_lead">Harihana Mohanraj, <a href="http://steinhardt.nyu.edu/scmsAdmin/media/users/dtv206/MastersThesis_HariharanMohanraj_PostRevision.pdf" target="_tab">"PET Brain Scan Sonification to Supplement the Diagnosis of Alzheimer’s Disease"</a>, Masters Thesis, NYU Steinhardt, NY, NY, January 2014.</li>
        <li class="li_lead">Agnieszka Roginska, Mohanraj Hariharan, Mark Ballora, Kent Friedman. “Immersive sonification for displaying brain scan data.” HEALTHINF 2013, 6th International Conference on Biomedical Electronics and Devices, Barcelona, Spain, February 11-14, 2013.</li>
        <li class="li_lead">Agnieszka Roginska, Mohanraj Hariharan, Mark Ballora, Kent Friedman.  <a href="http://icad2013.com/paper/12_S3-4_Roginska.pdf" target="_tab">"Exploring Sonification for Augmenting Brain Scan Data"</a>, Proceedings of the 19th <a href="http://icad.org/" target="_tab">International Conference on Auditory Displays</a> (ICAD 2013).  Lodz, Poland, July 2013.</li>
      </ul>
      <br/>

      <h5>Links</h5>
      <ul>
        <li class="li_lead">This is an ongoing collaborative project between the NYU Steinhardt Music Technology <a href="http://marl.smusic.nyu.edu/wordpress/" target="_tab">Music and Audio Research Laboratory</a> (MARL) and the <a href="http://www.med.nyu.edu/" target="_tab">Langone Medical Center</a>.</li>
        <li class="li_lead"><a></a>This research is supported by the <a href="http://ctsi.med.nyu.edu/" target="_tab">NYU-HHC Clinical and Translational Science Institute (CTSI)</a>.</li>
        <li class="li_lead">A complete project description can be found on the MARL website <a href="http://marl.smusic.nyu.edu/wordpress/projects/medical-imaging-sonification/" target="_tab">here</a>.</li>
      </ul>

      <br/>

    </div> <!--container-->
  </div> <!--wrap-->