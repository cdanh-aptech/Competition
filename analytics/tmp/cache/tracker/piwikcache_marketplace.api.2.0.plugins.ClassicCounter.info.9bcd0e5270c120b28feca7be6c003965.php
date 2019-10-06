<?php return array (
  'lifetime' => 1569700230,
  'data' => 
  array (
    'name' => 'ClassicCounter',
    'displayName' => 'Classic Counter',
    'owner' => 'Findus23',
    'description' => 'Embed a view counter in the style of classic CGI scripts into your website',
    'homepage' => 'https://lw1.at',
    'createdDateTime' => '2019-03-11 09:54:04',
    'donate' => 
    array (
    ),
    'support' => 
    array (
      0 => 
      array (
        'name' => 'Forum',
        'key' => 'forum',
        'value' => 'https://forum.matomo.org',
        'type' => 'url',
      ),
      1 => 
      array (
        'name' => 'Email',
        'key' => 'email',
        'value' => 'lukas@matomo.org',
        'type' => 'email',
      ),
      2 => 
      array (
        'name' => 'Issues / Bugs',
        'key' => 'issues',
        'value' => 'https://github.com/Findus23/plugin-ClassicCounter/issues',
        'type' => 'url',
      ),
      3 => 
      array (
        'name' => 'Source',
        'key' => 'source',
        'value' => 'https://github.com/Findus23/plugin-ClassicCounter',
        'type' => 'url',
      ),
    ),
    'isTheme' => false,
    'keywords' => 
    array (
      0 => 'nostalgia',
    ),
    'basePrice' => 0,
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'Lukas Winkler',
        'email' => 'lukas@matomo.org',
        'homepage' => 'https://lw1.at',
      ),
    ),
    'repositoryUrl' => 'https://github.com/Findus23/plugin-ClassicCounter',
    'lastUpdated' => '2019-07-29 18:54:03',
    'latestVersion' => '0.2.2',
    'numDownloads' => 898,
    'screenshots' => 
    array (
      0 => 'https://plugins.matomo.org/ClassicCounter/images/0.2.2/4909.png',
    ),
    'previews' => 
    array (
    ),
    'activity' => 
    array (
      'numCommits' => '8',
      'numContributors' => '1',
      'lastCommitDate' => '2019-07-29 18:52:51',
    ),
    'featured' => false,
    'isFree' => true,
    'isPaid' => false,
    'isBundle' => false,
    'isCustomPlugin' => false,
    'shop' => NULL,
    'bundle' => 
    array (
      'plugins' => 
      array (
      ),
    ),
    'specialOffer' => '',
    'versions' => 
    array (
      0 => 
      array (
        'name' => '0.1.0',
        'release' => '2019-03-11 09:54:04',
        'requires' => 
        array (
          'piwik' => '>=3.8.0,<4.0.0-b1',
        ),
        'numDownloads' => 625,
        'license' => 
        array (
          'name' => 'GPL v3+',
          'url' => '',
        ),
        'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-ClassicCounter/commits/0.1.0',
        'readmeHtml' => 
        array (
          'description' => '',
          'faq' => '',
          'changelog' => '',
          'documentation' => '',
        ),
        'download' => '/api/2.0/plugins/ClassicCounter/download/0.1.0',
      ),
      1 => 
      array (
        'name' => '0.2.2',
        'release' => '2019-07-29 18:54:03',
        'requires' => 
        array (
          'piwik' => '>=3.8.0,<4.0.0-b1',
        ),
        'numDownloads' => 273,
        'license' => 
        array (
          'name' => 'GPL v3+',
          'url' => 'https://plugins.matomo.org/ClassicCounter/0.2.2/license',
        ),
        'repositoryChangelogUrl' => 'https://github.com/Findus23/plugin-ClassicCounter/commits/0.2.2',
        'readmeHtml' => 
        array (
          'description' => '

<p>No website is complete without a nostalgic view counter at the bottom!</p>

<p>This plugin allows you to add an image showing the total amount of visits per <code>idSite</code>.</p>

<p><strong>Important: Installing this plugin makes the output of the <code>VisitsSummary.get</code> API endpoint visible for everyone!</strong></p>

<pre><code>&lt;img src="https://yourmatomoinstance.example/index.php?module=ClassicCounter&amp;action=svg&amp;idSite=1&amp;period=day"&gt;
</code></pre>

<h3>Optional parameters:</h3>

<ul><li><code>&amp;mode=</code> one of <code>["nb_visits", "nb_actions", "nb_visits_converted", "bounce_count", "sum_visit_length", "max_actions", "bounce_rate", "nb_actions_per_visit", "avg_time_on_site"]</code> (responses from the <code>VisitsSummary.get</code> API)</li>
<li><code>backgroundColor</code>: A hex color without the <code>#</code> (e.g. <code>f00</code> or <code>fe1234</code>)</li>
<li><code>foregroundColor</code></li>
<li><code>lightColor</code></li>
</ul><p><img src="./screenshots/4909.png" alt="4909.png" /></p>',
          'faq' => '',
          'documentation' => '',
          'changelog' => '<h3>0.2.2</h3>

<p>another bugfix (increase version in plugin.json)</p>

<h3>0.2.1</h3>

<p>quick bugfix (task)</p>

<h3>0.2.0</h3>

<p>add support for changing colors and and more API responses</p>

<h3>0.1.0</h3>

<p>first version</p>',
        ),
        'download' => '/api/2.0/plugins/ClassicCounter/download/0.2.2',
      ),
    ),
    'isDownloadable' => true,
    'changelog' => 
    array (
      'url' => 'https://plugins.matomo.org/ClassicCounter/changelog?matomoversion=3',
    ),
    'consumer' => 
    array (
      'license' => NULL,
    ),
  ),
);