<?php
   // $frames[] = array(array(240,320) ,'stretch');
   // $frames[] = array(array(320,320) ,'stretch');
   // $frames[] = array(array(360,320) ,'stretch');
   // $frames[] = array(array(375,320) ,'stretch');
   // $frames[] = array(array(414,320) ,'stretch');
   // $frames[] = array(array(480,320) ,'stretch');
   // $frames[] = array(array(568,320) ,'stretch');
   // $frames[] = array(array(600,320) ,'stretch');
   // $frames[] = array(array(640,320) ,'stretch');
   // $frames[] = array(array(667,320) ,'stretch');
   // $frames[] = array(array(768,320) ,'stretch');
   // $frames[] = array(array(1024,320)    ,'stretch');
   // $frames[] = array(array(1280,320)    ,'stretch');
   // $frames[] = array(array(1440,320)    ,'stretch');
   // $frames[] = array(array(1600,320)    ,'stretch');
   // $frames[] = array(array(1680,320)    ,'stretch');

   // $frames[] = array(array(1280,800)    ,'device'   ,'MacBook Pro 13');         // non-retina
   // $frames[] = array(array(1440,900)    ,'device'   ,'MacBook Pro 15');         // non-retina
   // $frames[] = array(array(1680,1050)   ,'device'   ,'MacBook Pro 15 Hi-Res');  // non-retina

   // $frames[] = array(array(600,1024)    ,'device'   ,'Kindle Fire');
   // $frames[] = array(array(768,1024)    ,'device'   ,'iPad');
   // $frames[] = array(array(1024,768)    ,'device'   ,'iPad');

   // // $frames[] = array(array(360,640)  ,'device'   ,'iPhone 6 Plus');          // @3x 1920 × 1080 // INCORRECT ASSUMPTION based on 1080 × 1920

   // // $frames[] = array(array(375,667)  ,'device'   ,'iPhone 6');               // @2x 750 × 1334
   // $frames[] = array(array(414,736) ,'device'   ,'iPhone 6 Plus');          // @3x 1242 × 2208 downsampling / 1.15 (* .8695652174) to 1080 × 1920

   // // $frames[] = array(array(320,568)  ,'device'   ,'iPhone 6 Zoom');          // @2x 750 × 1334 upsampling * 1.171875 = 750 × 1334
   // $frames[] = array(array(375,667) ,'device'   ,'iPhone 6/6 Plus Zoom');   // @2x 1125 × 2001 downsampling * 0.96 = 1080 × 1920

   // $frames[] = array(array(360,640) ,'device'   ,'Galaxy S4');              // @3x 1920 × 1080

   // $frames[] = array(array(320,568) ,'device'   ,'iPhone 5/6 Zoom');        // @2x 1136 × 640
   // $frames[] = array(array(320,480) ,'device'   ,'iPhone');                 // @2x 640 × 960

   // $frames[] = array(array(320,372) ,'viewport'     ,'iPhone'       ,'iOS 7 Safari');
   // $frames[] = array(array(480,212) ,'viewport min' ,'iPhone'       ,'iOS 7 Safari Min');
   // $frames[] = array(array(480,320) ,'viewport max' ,'iPhone'       ,'iOS 7 Safari Max');

   // $frames[] = array(array(568,232) ,'viewport min' ,'iPhone 5'     ,'iOS 8 Safari Min');
   // $frames[] = array(array(568,320) ,'viewport max' ,'iPhone 5'     ,'iOS 8 Safari Max');
   // $frames[] = array(array(320,460) ,'viewport min' ,'iPhone 5'     ,'iOS 8 Safari Min');
   // $frames[] = array(array(320,529) ,'viewport max' ,'iPhone 5'     ,'iOS 8 Safari Max');

   // // $frames[] = array(array(320,460)  ,'viewport min' ,'iPhone 5'     ,'iOS 7 Safari Min');
   // // $frames[] = array(array(320,583)  ,'viewport max' ,'iPhone 5'     ,'iOS 7 Safari Max');
   // // $frames[] = array(array(568,212)  ,'viewport min' ,'iPhone 5'     ,'iOS 7 Safari Min');
   // // $frames[] = array(array(568,320)  ,'viewport max' ,'iPhone 5'     ,'iOS 7 Safari Max');

   // $frames[] = array(array(667,331) ,'viewport min' ,'iPhone 6'     ,'iOS 8 Safari Min');
   // $frames[] = array(array(667,375) ,'viewport max' ,'iPhone 6'     ,'iOS 8 Safari Max');
   // $frames[] = array(array(375,559) ,'viewport min' ,'iPhone 6'     ,'iOS 8 Safari Min');
   // $frames[] = array(array(375,628) ,'viewport max' ,'iPhone 6'     ,'iOS 8 Safari Max');

   // // $frames[] = array(array(360,559)  ,'viewport'     ,'iPhone 6 Plus','iOS 8 Safari');
   // // $frames[] = array(array(667,331)  ,'viewport'     ,'iPhone 6 Plus','iOS 8 Safari');

   // $frames[] = array(array(768,928) ,'viewport'     ,'iPad Mini'    ,'iOS 8 Safari');
   // $frames[] = array(array(1024,672)    ,'viewport'     ,'iPad Mini'    ,'iOS 8 Safari');

   // $frames[] = array(array(768,928) ,'viewport'     ,'iPad'         ,'iOS 8 Safari');
   // $frames[] = array(array(1024,672)    ,'viewport'     ,'iPad'         ,'iOS 8 Safari');

   // $frames[] = array(array(1538,815)    ,'viewport'     ,'desktop');            // cesley's chrome

   // // $frames = array_reverse($frames);

   $stretch[] = array(array(240,'100%'));
   $stretch[] = array(array(320,'100%'));
   $stretch[] = array(array(360,'100%'));
   $stretch[] = array(array(375,'100%'));
   // $stretch[] = array(array(414,'100%'));
   // $stretch[] = array(array(480,'100%'));
   // $stretch[] = array(array(568,'100%'));
   // $stretch[] = array(array(600,'100%'));
   // $stretch[] = array(array(640,'100%'));
   // $stretch[] = array(array(667,'100%'));
   // $stretch[] = array(array(768,'100%'));
   // $stretch[] = array(array(1024,'100%'));
   // $stretch[] = array(array(1280,'100%'));
   // $stretch[] = array(array(1440,'100%'));
   // $stretch[] = array(array(1600,'100%'));
   // $stretch[] = array(array(1680,'100%'));

   $device[] = array(array(240,320),'Mobile');
   $device[] = array(array(320,480),'iPhone 4');
   $device[] = array(array(320,568),'iPhone 5/6 Zoom'); // @2x 640 × 1136
   $device[] = array(array(360,640),'Galaxy S3/4/5/6');
   $device[] = array(array(375,667),'iPhone 6/6 Plus Zoom'); // @2x 1125 × 2001 downsampling * 0.96 = 1080 × 1920
   // $device[] = array(array(414,736),'iPhone 6 Plus'); // @3x 1242 × 2208 downsampling / 1.15 (* .8695652174) to 1080 × 1920
   // $device[] = array(array(480,320),'iPhone 4');
   // $device[] = array(array(568,320),'iPhone 5/6 Zoom');
   // $device[] = array(array(600,1024),'Kindle Fire');
   // $device[] = array(array(640,360),'Galaxy S3/4/5/6');
   // $device[] = array(array(667,375),'iPhone 6/6 Plus Zoom');
   // $device[] = array(array(768,1024),'iPad');
   // $device[] = array(array(1024,768),'iPad');
   // $device[] = array(array(1280,800),'MacBook Pro 13'); // non-retina
   // $device[] = array(array(1440,900),'MacBook Pro 15'); // non-retina
   // $device[] = array(array(1600,1200),'Desktop');
   // $device[] = array(array(1680,1050),'MacBook Pro 15 Hi-Res'); // non-retina

   // $viewport[] = array(array(320,372),'iPhone 4','iOS 7 Safari');
   // $viewport[] = array(array(480,212),'iPhone 4','iOS 7 Safari Min');
   // $viewport[] = array(array(480,320),'iPhone 4','iOS 7 Safari Max');

   // $viewport[] = array(array(360,559),'Galaxy S6','Android 4.4 Chrome');
   // $viewport[] = array(array(640,279),'Galaxy S6',' Android 4.4 Chrome');

   $viewport[] = array(array(240,320),'Mobile');
   $viewport[] = array(array(320,460),'iPhone 5','iOS 8 Safari Min');
   $viewport[] = array(array(320,529),'iPhone 5','iOS 8 Safari Max');
   // $viewport[] = array(array(568,232),'iPhone 5','iOS 8 Safari Min');
   // $viewport[] = array(array(568,320),'iPhone 5','iOS 8 Safari Max');

   $viewport[] = array(array(375,559),'iPhone 6','iOS 8 Safari Min');
   $viewport[] = array(array(375,628),'iPhone 6','iOS 8 Safari Max');
   // $viewport[] = array(array(667,331),'iPhone 6','iOS 8 Safari Min');
   // $viewport[] = array(array(667,375),'iPhone 6','iOS 8 Safari Max');

   // $viewport[] = array(array(768,928),'iPad','iOS 8 Safari');
   // $viewport[] = array(array(1024,672),'iPad','iOS 8 Safari');
?>
