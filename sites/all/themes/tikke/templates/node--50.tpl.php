<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>

<div id="services">
  <div class="service-wrapper service-1">
    <div class="service service1">
      <div class="right-side">
        <div class="container">
          <div id="main" class="main">
          <figure>
              <div class="drawings mac">
                <img class="illustration" src="/sites/all/themes/tikke/images/service1.png" alt="iMac Illustration" />  
                <svg class="line-drawing" id="mac" width="127pt" height="127pt" viewBox="0 0 127 127" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#020202" d=" M 23.95 10.06 C 28.41 6.92 35.20 8.27 38.17 12.83 C 40.34 15.81 40.40 19.82 39.04 23.15 C 43.44 26.67 48.11 29.84 52.58 33.28 C 52.40 35.05 52.51 36.83 52.88 38.57 C 47.55 34.45 42.08 30.51 36.67 26.49 C 32.13 30.30 24.63 29.61 21.23 24.65 C 17.83 20.13 19.16 13.06 23.95 10.06 Z" />
                    <path fill="#020202" d=" M 94.51 26.21 C 92.29 19.22 98.59 11.43 105.93 12.67 C 113.32 13.43 117.48 23.00 112.94 28.90 C 109.31 34.44 100.84 34.50 96.52 29.75 C 90.17 33.49 83.90 37.38 77.55 41.12 C 78.33 39.23 78.97 37.28 79.47 35.29 C 84.45 32.21 89.50 29.26 94.51 26.21 Z" />
                    <path fill="#020202" d=" M 59.92 22.81 C 63.93 20.03 70.53 20.34 73.34 24.72 C 75.13 26.82 74.60 29.76 74.86 32.31 C 77.56 37.08 72.60 41.22 71.10 45.46 C 75.59 48.50 82.11 48.97 84.87 54.14 C 86.25 56.50 86.92 59.24 86.97 61.96 C 86.17 63.29 84.41 63.35 83.07 63.72 C 77.44 64.99 71.65 64.77 65.94 65.29 C 59.86 65.71 53.96 64.03 47.94 63.51 C 46.69 63.42 45.61 62.75 44.52 62.19 C 44.91 57.90 46.49 53.51 49.83 50.66 C 53.36 48.77 57.16 47.44 60.65 45.47 C 59.02 41.28 54.40 37.31 56.69 32.48 C 57.06 29.12 56.88 25.06 59.92 22.81 Z" />
                    <path fill="#020202" d=" M 20.38 55.01 C 29.22 52.72 38.15 50.78 46.93 48.28 C 45.32 49.88 44.18 51.85 42.70 53.54 C 35.60 55.48 28.39 57.06 21.28 58.97 C 21.19 63.85 17.78 68.59 12.83 69.45 C 6.65 70.95 0.00 65.42 0.63 59.02 C 0.31 52.57 7.39 47.43 13.46 49.32 C 16.54 50.03 18.78 52.41 20.38 55.01 Z" />
                    <path fill="#020202" d=" M 90.59 59.21 C 96.22 63.01 101.95 66.67 107.68 70.32 C 112.52 65.90 121.10 66.74 124.21 72.77 C 128.21 79.29 122.64 88.57 115.02 88.11 C 107.93 88.20 102.84 80.33 105.44 73.79 C 100.40 70.34 95.20 67.12 90.10 63.75 C 90.31 62.24 90.47 60.73 90.59 59.21 Z" />
                    <path fill="#020202" d=" M 55.24 68.17 C 56.63 68.34 58.02 68.52 59.41 68.68 C 55.46 78.56 51.80 88.56 47.92 98.48 C 51.93 101.42 53.92 107.03 51.61 111.64 C 49.09 117.61 40.55 119.66 35.70 115.29 C 30.56 111.41 30.82 102.77 36.01 99.06 C 38.28 97.15 41.34 96.86 44.19 96.89 C 47.88 87.32 51.58 77.75 55.24 68.17 Z" />
                </svg>
              </div>
              </figure>
          </div>
        </div><!-- /container -->
    </div>
      <div class="left-side">
        <div class="title">Strategic Services</div>
        <div class="big-title">Transform company agenda into an <color>interesting and comfortable</color> website</div>
        <div class="row row1"><strong>Research</strong> - Study the bussiness, target audience, competition and brainstorming.</div>
        <div class="row row2"><strong>Characterization</strong> - Analysis goals and objectives, UI/UX, website layout sketches.</div>
        <div class="row row3"><strong>Planning</strong> - Millstone, work environments, breaking tasks, planning management systems.</div>
        <div class="row row3"><strong>Other</strong> - Branding, marketing, content writing and social media accounts.</div>
      </div>
    </div>
  </div>
  <div class="service-wrapper service-2">
    <div class="service service2">
      <div class="right-side">  
        <div class="container">
          <div id="main" class="main">
              <div class="drawings mac">
                <img class="illustration" src="/sites/all/themes/tikke/images/service2.png" alt="iMac Illustration" />  
                <svg class="line-drawing" id="mac"width="126pt" height="126pt" viewBox="0 0 126 126" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path fill="#010101" d=" M 72.63 1.04 C 77.87 0.75 83.13 0.54 88.38 0.80 C 87.60 6.05 85.71 11.05 83.89 16.01 C 80.16 11.00 76.29 6.10 72.63 1.04 Z" />
                <path fill="#010101" d=" M 108.00 5.97 C 113.73 4.26 119.18 1.44 125.16 0.69 C 124.88 7.25 123.01 13.59 121.99 20.05 C 121.58 21.56 121.50 24.90 119.06 23.89 C 116.54 22.28 114.52 20.00 112.21 18.11 C 88.55 45.73 60.01 70.28 25.95 83.95 C 17.92 86.87 9.73 90.15 1.09 90.44 C 1.08 89.65 1.07 88.07 1.06 87.27 C 15.63 84.90 29.44 79.21 42.36 72.22 C 68.12 58.08 90.43 38.24 109.29 15.82 C 107.30 13.34 104.13 11.94 102.61 9.07 C 103.46 6.86 106.12 6.82 108.00 5.97 Z" />
                <path fill="#010101" d=" M 34.75 24.56 C 44.21 14.04 55.98 4.54 70.18 1.73 C 74.81 6.77 78.67 12.56 82.81 18.02 C 76.39 31.09 63.91 39.81 51.23 46.20 C 50.18 49.88 49.84 53.75 48.58 57.36 C 43.43 60.98 38.15 64.42 32.81 67.77 C 31.63 66.35 30.51 64.88 29.50 63.34 C 32.15 59.81 35.42 56.71 37.50 52.79 C 36.50 53.01 34.49 53.44 33.48 53.66 C 29.79 49.06 26.25 44.35 22.81 39.56 C 23.41 38.29 24.01 37.03 24.63 35.76 C 20.33 37.11 16.37 39.30 12.09 40.70 C 11.29 39.17 9.40 37.89 9.42 36.09 C 13.86 31.92 18.52 27.94 23.28 24.12 C 27.07 23.53 30.93 24.43 34.75 24.56 Z" />
                <path fill="#ffffff" d=" M 60.27 15.26 C 64.13 13.31 69.11 16.60 68.46 20.96 C 68.13 25.20 62.57 27.61 59.34 24.79 C 56.05 22.42 56.66 17.01 60.27 15.26 Z" />
                <path fill="#010101" d=" M 101.16 35.27 C 104.71 34.48 108.39 35.06 112.00 34.91 C 116.25 35.06 120.55 34.54 124.77 35.23 C 125.81 39.07 125.26 43.09 125.31 47.01 C 125.34 68.99 125.30 90.98 125.37 112.96 C 125.44 117.01 125.33 121.06 124.97 125.10 C 116.96 125.50 108.93 125.45 100.92 125.05 C 100.44 96.70 100.89 68.34 100.69 39.99 C 100.74 38.41 100.55 36.76 101.16 35.27 Z" />
                <path fill="#010101" d=" M 11.62 47.31 C 12.88 45.78 14.03 43.89 16.11 43.43 C 21.49 41.70 26.86 46.12 28.40 51.09 C 29.40 54.98 27.47 59.05 24.76 61.80 C 22.50 64.25 19.12 64.92 16.09 65.94 C 17.18 64.49 19.15 62.92 18.16 60.86 C 14.62 60.74 12.85 64.62 9.60 65.46 C 7.60 66.44 5.54 65.13 3.57 64.73 C 6.27 62.97 10.01 62.12 11.39 58.91 C 11.86 55.58 8.32 57.74 6.64 58.11 C 7.42 55.72 8.17 52.98 10.50 51.62 C 12.63 50.34 15.00 49.30 16.42 47.15 C 14.82 47.14 13.22 47.22 11.62 47.31 Z" />
                <path fill="#010101" d=" M 67.86 63.97 C 75.26 63.87 82.66 63.86 90.05 63.98 C 91.61 63.83 92.27 65.66 92.04 66.94 C 91.99 85.67 92.08 104.39 91.99 123.11 C 92.26 125.30 89.45 125.24 87.99 125.35 C 81.26 125.44 74.52 125.42 67.79 125.21 C 67.44 123.52 67.23 121.79 67.26 120.07 C 67.28 104.71 67.28 89.36 67.27 74.01 C 67.31 70.66 66.97 67.24 67.86 63.97 Z" />
                <path fill="#010101" d=" M 34.06 86.01 C 33.87 84.51 35.84 84.16 36.95 84.18 C 43.30 84.16 49.65 84.12 56.00 84.20 C 57.63 83.95 58.89 85.48 58.67 87.03 C 58.77 98.02 58.63 109.02 58.73 120.02 C 58.65 121.69 58.96 123.54 57.91 124.99 C 54.98 125.59 51.97 125.39 48.99 125.38 C 43.98 125.22 38.86 125.95 33.96 124.54 C 34.04 111.69 33.83 98.85 34.06 86.01 Z" />
                <path fill="#010101" d=" M 2.14 94.19 C 8.78 93.86 15.45 94.12 22.10 94.06 C 23.34 93.91 25.30 94.42 25.16 96.01 C 25.28 105.68 25.42 115.37 25.08 125.04 C 17.05 125.53 8.99 125.48 0.96 125.08 C 0.38 116.41 0.77 107.70 0.62 99.01 C 0.85 97.37 0.29 95.06 2.14 94.19 Z" />
                </svg>
              </div>
          </div>
        </div><!-- /container -->
    </div>
    <div class="left-side">
        <div class="title">Design services</div>
        <div class="big-title">Transmit through the Website, <color>at first glance, </color>the values ​​and atmosphere</div>
        <div class="row row1"><strong>UI/UX</strong> - Browsing experience and navigation, messaging, data processes and more</div>
        <div class="row row2"><strong>Creative and Innovation </strong> - creative design with a focus on simple elegance and modern look</div>
        <div class="row row3"><strong>Responsive websites</strong> - Mobile first design aproach.</div>
      </div>
    </div>
  </div>
  <div class="service-wrapper service-3">
    <div class="service service3">
      <div class="right-side">  
        <div class="container">
          <div id="main" class="main">
              <div class="drawings mac">
                <img class="illustration" src="/sites/all/themes/tikke/images/service3.png" alt="iMac Illustration" />  
                <svg class="line-drawing" id="mac" width="127pt" height="127pt" viewBox="0 0 127 127" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path fill="#000000" d=" M 11.75 4.39 C 21.58 -2.90 37.92 2.29 41.60 14.09 C 43.12 18.53 41.28 23.10 41.42 27.62 C 49.80 35.89 57.95 44.39 66.29 52.70 C 76.78 62.34 87.30 71.94 97.83 81.54 C 101.65 80.78 105.64 79.51 109.51 80.79 C 118.53 83.51 124.17 93.45 123.10 102.62 C 118.55 100.47 114.70 97.05 110.06 95.10 C 105.95 94.00 102.55 97.47 100.77 100.75 C 98.74 103.97 98.37 108.78 101.46 111.47 C 104.89 114.24 109.01 116.00 112.44 118.79 C 102.63 125.48 87.45 121.31 82.86 110.25 C 80.72 105.49 82.65 100.37 82.55 95.43 C 72.83 85.81 63.51 75.79 53.57 66.39 C 44.35 58.20 35.31 49.80 26.21 41.47 C 21.96 42.40 17.33 43.76 13.17 41.71 C 4.70 38.58 0.09 29.09 0.85 20.40 C 5.48 22.50 9.32 26.04 14.02 27.96 C 18.41 29.02 21.89 25.16 23.58 21.58 C 25.49 18.27 25.30 13.39 21.98 11.05 C 18.60 8.80 14.99 6.88 11.75 4.39 Z" />
                <path fill="#000000" d=" M 53.70 1.80 C 59.66 0.03 66.30 0.06 72.25 1.86 C 76.09 3.77 74.18 8.68 74.74 12.03 C 74.73 14.56 77.71 14.89 79.50 15.66 C 82.78 16.58 85.66 18.67 88.97 19.40 C 92.92 18.47 94.39 12.58 98.92 12.96 C 102.62 14.17 105.48 17.11 108.16 19.81 C 110.18 22.23 112.55 24.81 113.02 28.03 C 112.36 31.61 108.39 33.16 106.71 36.19 C 106.16 37.88 107.45 39.39 108.02 40.89 C 109.61 43.89 110.42 47.23 111.90 50.28 C 115.35 53.13 121.76 49.00 124.21 53.74 C 125.98 59.70 125.94 66.28 124.14 72.22 C 121.16 76.92 113.19 71.93 110.73 77.40 C 106.77 76.28 102.70 76.81 98.79 77.77 C 97.23 76.32 95.67 74.88 94.10 73.45 C 96.94 64.84 95.97 55.22 91.77 47.21 C 86.61 37.86 76.75 31.30 66.09 30.29 C 61.01 29.88 55.91 30.73 51.12 32.39 C 49.08 30.27 46.88 28.27 45.11 25.91 C 45.12 22.56 45.93 19.25 45.73 15.88 C 47.71 14.99 51.15 14.85 51.24 12.02 C 51.81 8.65 49.93 3.79 53.70 1.80 Z" />
                <path fill="#000000" d=" M 13.64 50.69 C 14.86 49.52 15.15 47.74 15.83 46.25 C 18.98 46.44 22.12 46.08 25.17 45.30 C 27.54 47.39 29.87 49.51 32.16 51.68 C 29.54 59.24 29.58 67.68 32.59 75.12 C 34.90 81.86 40.12 87.24 46.03 91.02 C 54.81 96.38 66.06 97.09 75.58 93.31 C 76.72 94.77 78.47 95.94 78.97 97.79 C 78.47 102.00 77.86 106.27 79.00 110.44 C 77.76 111.07 76.16 111.23 75.25 112.38 C 73.32 115.99 76.57 121.77 72.30 124.18 C 66.34 126.01 59.73 125.94 53.77 124.15 C 48.30 121.67 54.47 113.08 48.68 111.16 C 44.63 110.03 41.01 107.74 37.03 106.55 C 33.03 107.52 31.56 113.43 26.97 113.02 C 21.04 110.39 16.44 105.31 13.25 99.76 C 11.33 94.45 19.74 92.91 19.28 88.09 C 17.39 84.06 15.89 79.86 14.13 75.78 C 10.98 72.97 5.72 76.37 2.57 73.37 C 0.85 71.35 0.97 68.45 0.63 65.95 C 0.49 61.69 0.35 57.10 2.17 53.15 C 4.92 49.51 10.15 52.57 13.64 50.69 Z" />
                </svg>
              </div>
          </div>
        </div><!-- /container -->
    </div>
    <div class="left-side">
        <div class="title">Developing services</div>
        <div class="big-title">The quality is reflected in a <color>clean code </color>easy interface and outstanding performance</div>
        <div class="row row1"><strong><a href="http://drupal.org">Drupal</a></strong> - The world best CMS system!</div>
        <div class="row row2"><strong>Quality code</strong> - Best and most advanced dev languages with high code standards.</div>
        <div class="row row3"><strong>Responsive Website</strong> - Best practice to best all screen results.</div>
        <div class="row row4"><strong>Websiste variety</strong> - E-commerce, media, booking, events, blog and much more. </div>
        <div class="row row5"><strong>Maintenance</strong> - Keeping the servers and the websites update to ensure high security level. </div>
      </div>
    </div>
  </div>
</div>

<script src="/sites/all/themes/tikke/js/classie.js"></script>
<script src="/sites/all/themes/tikke/js/svganimations.js"></script>