<?php
  // Database connectiviy info.
  $tagger_conf['db'] = array(
    'name' => '<database name>',
    'server' => '<server>',
    'username' => '<username>',
    'password' => '<password>',
  );
  $tagger_conf['dbhandler'] = 'Default';

  //Tagger default language - the codes are the same as html language codes (http://www.ietf.org/rfc/rfc1766.txt)
  $tagger_conf['language'] = 'da'; // Others could be sv (Sweden), nn (Norway - Nynorsk) and nb (Norway - Bokmål)

  // Data sources for open linked data.
  $tagger_conf['lod_sources'] = array(
    1 => 'DBpedia',
    2 => 'en.wikipedia.org',
    3 => 'da.wikipedia.org',
    4 => 'GeoNames',
    5 => 'New York Times',
    6 => 'NYT search api'
    );

  // Settings for ratings of Named Entities
  // These should be numbers between 0 and 1
  // 0: turned off
  // 0.5: half weight
  // 1: Turned on (full weight)
  $tagger_conf['frequency_rating'] = 1;
  $tagger_conf['HTML_rating'] = 1;
  $tagger_conf['positional_rating'] = 1;

  // the last word or paragraph in the text will have a rating that is 0.3
  // times lower than the first word or paragraph
  $tagger_conf['positional_minimum_rating'] = 0.3;
  // if the text is shorter than the critical token count, the last word will
  // not be rated as low as the minimum rating
  $tagger_conf['positional_critical_token_count_rating'] = 350;

  $tagger_conf['mark_tags_start'] = '<strong>';
  $tagger_conf['mark_tags_end'] = '</strong>';
  $tagger_conf['mark_tags_substitution'] = FALSE;


  // HTML rating
  $tagger_conf['HTML_tags'] = array(
    'h1' => 10,
    'h2' => 7,
    'h3' => 5,
    'strong' => 3,
    //'#text' => 0,
    // text that is not within any of the HTML-tags above has a rating of 0
    // i.e. plain text is rated with 0
  );

  // HTML paragraph separators
  // i.e. which tags define a paragraph
  $tagger_conf['HTML_paragraph_separators'] = array(
    'p',
    'h1',
    'h2',
    'h3',
  );

  
  // Minimum one full keyword per 250 words
  $tagger_conf['keyword_threshold'] = 1/250;


  // Settings for logging
  $tagger_conf['log_handler'] = 'Default';
  $tagger_conf['logging_type'] = 'file'; // file db
  $tagger_conf['logging_level'] = 'standard'; // none error warning standard verbose


  // Keyword-extraction configuration
  $tagger_conf['keyword']['property'] = 'diff_outer_doc_freq';
  $tagger_conf['keyword']['normalize'] = false;

  // Database table names
  $tagger_conf['db']['lookup_table'] = 'tagger_lookup';
  $tagger_conf['db']['unmatched_table'] = 'tagger_unmatched_terms';
  $tagger_conf['db']['linked_data_table'] = 'tagger_linked_data_sources';
  $tagger_conf['db']['disambiguation_table'] = 'tagger_disambiguation';


  $tagger_conf['db']['docstats_table'] = 'tagger_docstats';
  $tagger_conf['db']['wordstats_table'] = 'tagger_wordstats';
  $tagger_conf['db']['word_relations_table'] = 'tagger_word_relations_' . $tagger_conf['keyword']['property'];





