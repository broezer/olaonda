<?php
/**
 * Template Name: Casa 
 * The template for Casa Olá Onda
 *
 */
get_header(); ?>


<?php
$image = get_field('header_image');
$size  = 'hd';
$image_url = $image['sizes'][ $size ];
?>


<main>


  <?php if($image):?>
  <header class="image-box rooms intro-box"  style="background-image:url('<?php echo $image_url;?>')" >
  <?php else:?>
  <header class="image-box rooms intro-box">
  <?php endif;?>
    <section class="content">
      <h1 class="white"><?php the_title();?></h1>
      <h2 class="white"><?php the_field('subtitle')?></h2>
    </section>
  </header>

  <article class="rooms">
    <p class="full-width medium-italic">
      <?php the_field('intro');?>
    </p>
    <section class="amenities">

      <ul>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="71px" viewBox="0 0 24 24" id="kitchen" fill="#89DAC1">
          <path d="M16 22h5v2h-5v-2zm-13 2h5v-2h-5v2zm10-19h-2v1h2v-1zm10-5v21h-22v-21h22zm-14 15h-3v2h3v-2zm0-3h-3v2h3v-2zm0-3h-3v2h3v-2zm5 6h-4v2h4v-2zm0-3h-4v2h4v-2zm0-3h-4v2h4v-2zm4 6h-3v2h3v-2zm0-3h-3v2h3v-2zm0-3h-3v2h3v-2zm0-5h-12v3h12v-3zm-8 1h-2v1h2v-1z"/>
        </svg>
          <h3>kitchen</h3>
        </li>
        
        <li>
          <svg width="72px"  viewBox="546 1330 72 59" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Shower_symbol" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(546.333333, 1330.000000)">
                <g id="Layer_1" fill-rule="nonzero" fill="#FFE581">
                    <path d="M22.6262895,2.96563205 L56.2066872,36.5460297 L51.5540123,41.1987046 L17.9736146,7.61830694 L22.6262895,2.96563205 Z M17.5389691,16.5192805 C16.9436082,16.813561 16.2219588,16.5710854 15.9275258,15.9774878 C15.6323711,15.3838902 15.8762887,14.664378 16.4716495,14.3700976 L19.0580412,13.0922439 C19.6534021,12.7979634 20.3743299,13.0411585 20.6694845,13.6347561 C20.9646392,14.2283537 20.7207216,14.9478659 20.1260825,15.2414268 L17.5389691,16.5192805 Z M10.0468041,20.9838537 C9.47742268,21.3220244 8.74134021,21.1356707 8.4028866,20.5679756 C8.06371134,20.0002805 8.25061856,19.266378 8.82072165,18.9289268 L11.2938144,17.461122 C11.8624742,17.1229512 12.5985567,17.3093049 12.9370103,17.877 C13.2761856,18.4446951 13.0892784,19.1785976 12.5198969,19.5153293 L10.0468041,20.9838537 Z M2.55391753,25.4484268 C2.01051546,25.8304878 1.26072165,25.7002561 0.877525773,25.1591829 C0.495051546,24.6173902 0.624948454,23.8698171 1.16835052,23.4877561 L3.52814433,21.83 C4.07082474,21.4486585 4.82134021,21.5781707 5.20381443,22.1199634 C5.58628866,22.6610366 5.45639175,23.4093293 4.91298969,23.7906707 L2.55391753,25.4484268 Z M44.8064948,43.188 C44.4269072,43.7326707 43.6778351,43.865061 43.132268,43.4865976 C42.5874227,43.1081341 42.4539175,42.360561 42.8335052,41.8166098 L44.4831959,39.4566098 C44.8620619,38.913378 45.6118557,38.7795488 46.1574227,39.1580122 C46.702268,39.5364756 46.8357732,40.2833293 46.4569072,40.826561 L44.8064948,43.188 Z M40.3957732,50.6975488 C40.0602062,51.268122 39.3248454,51.4580732 38.7547423,51.1235 C38.1839175,50.7874878 37.9926804,50.0557439 38.3289691,49.4866098 L39.7874227,47.0129268 C40.1229897,46.4437927 40.8576289,46.253122 41.4284536,46.5884146 C41.9992784,46.9229878 42.1897938,47.6547317 41.8542268,48.2245854 L40.3957732,50.6975488 Z M35.9850515,58.2070976 C35.6935052,58.8035732 34.9718557,59.0496463 34.3757732,58.7589634 C33.7789691,58.467561 33.5314433,57.7502073 33.8229897,57.1551707 L35.0909278,54.5692439 C35.3824742,53.9742073 36.1026804,53.7274146 36.6994845,54.0188171 C37.2962887,54.3087805 37.5438144,55.0268537 37.252268,55.6226098 L35.9850515,58.2070976 Z M40.9601031,39.2947195 C40.5343299,39.8041341 39.7758763,39.8717683 39.2656701,39.4465366 C38.7561856,39.0220244 38.6883505,38.2650976 39.1141237,37.7564024 L40.964433,35.5496585 C41.3894845,35.0416829 42.1486598,34.9726098 42.658866,35.3978415 C43.1683505,35.8223537 43.2361856,36.578561 42.811134,37.0865366 L40.9601031,39.2947195 Z M35.9092784,46.3919878 C35.5246392,46.931622 34.7762887,47.0568171 34.2364948,46.6733171 C33.696701,46.2898171 33.571134,45.5436829 33.9557732,45.0054878 L35.6256701,42.6692317 C36.008866,42.1317561 36.7579381,42.005122 37.2970103,42.388622 C37.8368041,42.772122 37.9623711,43.5182561 37.5784536,44.0564512 L35.9092784,46.3919878 Z M30.8570103,53.4892561 C30.5142268,54.0583902 29.7745361,54.2404268 29.2058763,53.8986585 C28.6364948,53.5554512 28.4531959,52.8201098 28.796701,52.2524146 L30.2861856,49.7866463 C30.6289691,49.2189512 31.3686598,49.0361951 31.9365979,49.3786829 C32.5059794,49.7204512 32.6885567,50.4565122 32.3464948,51.0249268 L30.8570103,53.4892561 Z M36.9498969,35.4661951 C36.4959794,35.9417927 35.741134,35.9597805 35.2648454,35.5064878 C34.7885567,35.0539146 34.7705155,34.3005854 35.224433,33.8249878 L37.198866,31.7621463 C37.6520619,31.2872683 38.4076289,31.2678415 38.8846392,31.7211341 C39.3609278,32.1744268 39.3782474,32.9263171 38.9250515,33.4011951 L36.9498969,35.4661951 Z M31.4913402,42.158378 C31.0756701,42.6670732 30.3273196,42.742622 29.8185567,42.3281829 C29.3097938,41.9137439 29.2340206,41.1676098 29.6496907,40.6596341 L31.4538144,38.4572073 C31.8680412,37.9499512 32.6171134,37.8729634 33.1251546,38.288122 C33.6346392,38.702561 33.7096907,39.4486951 33.2947423,39.9559512 L31.4913402,42.158378 Z M26.0320619,48.852 C25.6560825,49.3923537 24.9113402,49.5254634 24.372268,49.149878 C23.8317526,48.7742927 23.6975258,48.0339146 24.0742268,47.495 L25.7080412,45.1522683 C26.0840206,44.6133537 26.8273196,44.4802439 27.3671134,44.8558293 C27.9076289,45.2306951 28.041134,45.9703537 27.6651546,46.5107073 L26.0320619,48.852 Z M32.9404124,31.6369512 C32.4576289,32.0801707 31.7071134,32.0477927 31.263299,31.5657195 C30.8202062,31.0850854 30.8526804,30.3353537 31.3354639,29.8928537 L33.4340206,27.9739146 C33.9160825,27.5321341 34.6673196,27.5630732 35.111134,28.0451463 C35.5535052,28.5265 35.5210309,29.2747927 35.0389691,29.7165732 L32.9404124,31.6369512 Z M27.0741237,37.9247683 C26.6274227,38.4032439 25.8790722,38.4277073 25.4013402,37.9830488 C24.9236082,37.5383902 24.8976289,36.7922561 25.3443299,36.3152195 L27.2826804,34.2459024 C27.7279381,33.7695854 28.4770103,33.7436829 28.9547423,34.1883415 C29.4331959,34.6337195 29.4584536,35.3791341 29.0124742,35.8561707 L27.0741237,37.9247683 Z M21.2071134,44.2133049 C20.7979381,44.7263171 20.0495876,44.8083415 19.5386598,44.400378 C19.0270103,43.9916951 18.9425773,43.2477195 19.3524742,42.7368659 L21.1313402,40.5186098 C21.5405155,40.0077561 22.2881443,39.9250122 22.7997938,40.3322561 C23.3121649,40.740939 23.3951546,41.4849146 22.9859794,41.9957683 L21.2071134,44.2133049 Z M28.9309278,27.8077073 C28.42,28.2178293 27.6730928,28.1358049 27.2624742,27.6256707 C26.8525773,27.1162561 26.9348454,26.3708415 27.4464948,25.961439 L29.6684536,24.1864024 C30.1786598,23.777 30.9262887,23.8575854 31.3369072,24.368439 C31.7468041,24.8778537 31.6645361,25.6225488 31.1543299,26.0319512 L28.9309278,27.8077073 Z M22.6569072,33.691878 C22.1798969,34.1386951 21.4308247,34.1142317 20.9841237,33.6386341 C20.5374227,33.1623171 20.5619588,32.4161829 21.0389691,31.9700854 L23.1115464,30.0353171 C23.5878351,29.589939 24.3369072,29.6129634 24.7836082,30.0892805 C25.2303093,30.5641585 25.2057732,31.3102927 24.7294845,31.7571098 L22.6569072,33.691878 Z M16.3821649,39.5760488 C15.9390722,40.0602805 15.1871134,40.093378 14.7043299,39.6515976 C14.2208247,39.2090976 14.1876289,38.4615244 14.63,37.9794512 L16.5531959,35.8835122 C16.995567,35.4007195 17.7468041,35.3683415 18.2295876,35.8086829 C18.7138144,36.2497439 18.7470103,36.9973171 18.3046392,37.4815488 L16.3821649,39.5760488 Z M24.9214433,23.9784634 C24.3816495,24.3554878 23.6390722,24.2238171 23.2616495,23.6849024 C22.8849485,23.1467073 23.017732,22.4056098 23.5575258,22.0293049 L25.9036082,20.3981707 C26.4419588,20.0218659 27.1859794,20.1528171 27.5634021,20.6917317 C27.9401031,21.2299268 27.8080412,21.9703049 27.2689691,22.3466098 L24.9214433,23.9784634 Z M18.2396907,29.4582683 C17.7309278,29.8741463 16.9818557,29.8007561 16.5661856,29.2935 C16.1505155,28.7862439 16.2241237,28.0393902 16.7321649,27.6249512 L18.9389691,25.8232927 C19.4462887,25.4081341 20.1960825,25.4815244 20.6110309,25.988061 C21.0274227,26.4953171 20.9530928,27.2407317 20.4450515,27.6566098 L18.2396907,29.4582683 Z M11.5572165,34.9387927 C11.0809278,35.3942439 10.3253608,35.3769756 9.87072165,34.9028171 C9.41608247,34.4272195 9.43195876,33.6753293 9.90824742,33.2213171 L11.9757732,31.2498537 C12.4520619,30.795122 13.2069072,30.8123902 13.6608247,31.2865488 C14.1161856,31.7614268 14.0995876,32.511878 13.6240206,32.9680488 L11.5572165,34.9387927 Z M20.9119588,20.1492195 C20.343299,20.4931463 19.6043299,20.3118293 19.2601031,19.7441341 C18.9165979,19.177878 19.0991753,18.440378 19.6678351,18.0964512 L22.1373196,16.6092195 C22.7045361,16.2660122 23.4449485,16.4466098 23.7891753,17.0143049 C24.1326804,17.580561 23.9501031,18.318061 23.3828866,18.6605488 L20.9119588,20.1492195 Z M13.8217526,25.225378 C13.2826804,25.6110366 12.5336082,25.486561 12.1482474,24.9498049 C11.7636082,24.4123293 11.887732,23.6654756 12.4268041,23.2812561 L14.7678351,21.6134268 C15.3061856,21.2284878 16.0559794,21.3529634 16.4406186,21.8897195 C16.8259794,22.4271951 16.7018557,23.1726098 16.1627835,23.5582683 L13.8217526,25.225378 Z M6.73226804,30.3008171 C6.22206186,30.7282073 5.4628866,30.6612927 5.0371134,30.1533171 C4.61061856,29.644622 4.67701031,28.8891341 5.18649485,28.4639024 L7.39835052,26.6147561 C7.90783505,26.1888049 8.66628866,26.2557195 9.09278351,26.7629756 C9.52,27.2709512 9.45360825,28.025 8.94340206,28.4531098 L6.73226804,30.3008171 Z M70,5.99209756 C57.6872165,5.99209756 56.8248454,6.85335366 51.2205155,12.4583537 L50.5464948,13.1310976 L52.1348454,14.7147439 C56.2208247,18.788622 56.2208247,25.3944634 52.1348454,29.469061 L29.6828866,7.08287805 C33.7695876,3.00828049 40.3943299,3.00828049 44.4810309,7.08287805 L48.5056701,11.0955976 L46.4648454,9.06009756 L47.1323711,8.39382927 C53.7325773,1.7937439 55.8296907,0.236 70,0.236 L70,5.99209756 Z" id="Combined-Shape"></path>
                </g>
            </g>
          </svg>
          <h3>bathrooms</h3>
        </li>
        <li>
          <svg width="71px"  viewBox="826 1329 71 52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="bed" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(826.666667, 1329.000000)">
                  <g id="Capa_1"></g>
                  <path d="M69.3682051,32.0241103 L61.6208205,17.9493241 L61.6951282,17.9493241 L61.6951282,4.92565517 C61.6951282,2.26253793 59.5265641,0.0961103448 56.8608205,0.0961103448 L12.8918462,0.0961103448 C10.2261026,0.0961103448 8.05753846,2.26253793 8.05753846,4.92565517 L8.05753846,17.9493241 L8.13184615,17.9493241 L0.384102564,32.0241103 L69.3682051,32.0241103 Z M17.8564615,13.2897655 C17.8564615,11.728331 19.1283077,10.4577379 20.6912821,10.4577379 L48.5530769,10.4577379 C50.3964103,10.4577379 51.8962051,11.9556966 51.8962051,13.7972138 L51.8962051,14.3996966 C51.8962051,16.2408552 50.3964103,17.7391724 48.5530769,17.7391724 L21.1992308,17.7391724 C19.3558974,17.7391724 17.8564615,16.2412138 17.8564615,14.3996966 L17.8564615,13.2897655 Z M11.4092821,17.9496828 L16.1086154,17.9496828 C17.2332821,19.5541517 19.0938462,20.6077793 21.1992308,20.6077793 L48.5534359,20.6077793 C50.6584615,20.6077793 52.5193846,19.5541517 53.6440513,17.9496828 L58.3433846,17.9496828 L64.511641,29.1555034 L5.24102564,29.1555034 L11.4092821,17.9496828 Z M69.7526667,34.3049379 L69.7526667,47.4889103 C69.7526667,49.7869517 67.8813333,51.6568 65.5810256,51.6568 L4.172,51.6568 C1.87169231,51.6564414 0,49.7869517 0,47.4885517 L0,34.3045793 L69.7526667,34.3045793 L69.7526667,34.3049379 Z" id="Shape" fill="#89DAC1" fill-rule="nonzero"></path>
              </g>
          </svg>
          <h3>kingsize beds</h3>
        </li>
        <li>
          <svg width="55px" height="60px" viewBox="0 0 55 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

              <g id="MAIN_v2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="02---Rooms" transform="translate(-439.000000, -1272.000000)" fill="#FFE581" fill-rule="nonzero">
                      <g id="Terrace" transform="translate(467.458160, 1301.667974) rotate(-15.000000) translate(-467.458160, -1301.667974) translate(439.458160, 1271.167974)">
                          <path d="M30.1358919,4.76610722 L30.1358919,2.31814553 C30.1358919,1.0385292 29.0996809,0 27.8177464,0 C26.5358119,0 25.4996009,1.0385292 25.4996009,2.31814553 L25.4996009,4.75683464 C9.46730636,5.9669066 1.45811354,17.7245408 0,27.7203843 C4.32334142,21.5147087 14.224141,21.5147087 18.5451643,27.7203843 C22.8012795,21.6074345 32.558354,21.486891 36.8979225,27.7203843 C41.2189457,21.5147087 51.3144695,21.5147087 55.6354928,27.7203843 C54.1866518,17.7732218 46.0731425,6.08513203 30.1358919,4.76610722 Z M8.7208635,18.4408477 C13.2412473,12.3371705 19.4561955,9.68984833 25.9539574,9.30503617 C21.3014393,13.0650682 18.9462034,18.7700244 18.5451643,21.2875304 C15.6150283,19.2568349 12.0937652,18.3156679 8.7208635,18.4408477 Z M36.9048769,21.2898486 C36.5223829,18.8233417 34.3015995,13.0836134 29.6884898,9.31199061 C36.030936,9.72230237 42.2760201,12.3000802 46.8752208,18.4408477 C43.1545973,18.3156679 39.6866515,19.3727422 36.9048769,21.2898486 Z M30.1358919,28.1816953 L30.1358919,60.3576411 C30.1358919,60.3576411 25.4996009,60.3576411 25.4996009,60.3576411 L25.4996009,28.1283779 C27.0759398,27.604477 28.4436457,27.5673867 30.1358919,28.1816953 Z" id="Shape"></path>
                      </g>
                  </g>
              </g>
          </svg>
          <h3>terrace</h3>
        </li>
      </ul>
      
      
    </section>
    
    <section class="prices">
    
    <?php 
        // check for rows (sub repeater)
        if( have_rows('prices') ): ?>
       <ul class="prices">
         <li>
            <div>Month</div>
            <div>Per night (4 persons)</div>
            <div>Per night (3 persons)</div>
            <div>Per night (2 persons)</div>
          </li>
        <?php 

        // loop through rows (sub repeater)
        while( have_rows('prices') ): the_row();
            // display each item as a list - with a class of completed ( if completed )
            $month = get_sub_field('month');
            $price_04 = get_sub_field('price_04');
            $price_03 = get_sub_field('price_03');
            $price_02 = get_sub_field('price_02');
          ?>
          <li>
            <div><?php echo $month;?></div>
            <div>€<?php echo $price_04;?>,-</div>
            <div>€<?php echo $price_03;?>,-</div>
            <div>€<?php echo $price_02;?>,-</div>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php endif; //if( get_sub_field('items') ): ?>
        
    </section>
    <p class="full-width">
      <?php the_field('notice');?>
    </p>
  </article>
  
  <?php
  // check if the flexible content field has rows of data
  if( have_rows('rooms') ):

       // loop through the rows of data
      while ( have_rows('rooms') ) : the_row();

          if( get_row_layout() == 'room' ):

            get_template_part( 'templates/parts/rooms-casa');


          endif;

      endwhile;

  else :

      // no layouts found

  endif;

  ?>

  <article>
    <div class="wrapper">
      <section class="left-6">
        <a class="svg-link" href="/contact">
          <svg width="100%" height="125" viewBox="0 0 600 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs></defs>
                <g>
                    <rect id="Rectangle-2" stroke="#89DAC1" stroke-width="11" x="5.5" y="5.5" width="500" height="114"></rect>
                    <text id="" font-family="'Montserrat', sans-serif" font-size="24" font-weight="bold" letter-spacing="5.5999999" fill="#89DAC1">
                        <tspan x="42" y="72">Book Casa Olá Onda</tspan>
                    </text>
                    <polygon id="Triangle" fill="#89DAC1" points="474 63.5 449 76 449 51"></polygon>
                </g>
          </svg>
        </a>
      </section>
    </div>
  </article>

</main>

<?php get_footer(); ?>
