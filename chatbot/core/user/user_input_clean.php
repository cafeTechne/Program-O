<?php

  /***************************************
  * www.program-o.com
  * PROGRAM O
  * Version: 2.1.3
  * FILE: chatbot/core/user/user_input_clean.php
  * AUTHOR: Elizabeth Perreau and Dave Morton
  * DATE: MAY 4TH 2011
  * DETAILS: this file contains the functions to clean a user input
  ***************************************/
  /**
  * function clean_for_aiml_match()
  * this function controls the calls to other functions to clean text for an aiml match
  * @param string $text
  * @return string text
  **/
  function clean_for_aiml_match($text)
  {
    //runDebug(__FILE__, __FUNCTION__, __LINE__, 'Starting function and setting timestamp.', 2);
    $otext = $text;
    $text = remove_all_punctuation($text);
    //was not all before
    $text = whitespace_clean($text);
    $text = capitalize($text);
    runDebug(__FILE__, __FUNCTION__, __LINE__, "In: $otext Out:$text", 4);
    return $text;
  }

  /**
  * function whitespace_clean()
  * this function removes multiple whitespace
  * @param string $text
  * @return string text
  **/
  function whitespace_clean($text)
  {
    //runDebug(__FILE__, __FUNCTION__, __LINE__, 'Starting function and setting timestamp.', 2);
    $otext = $text;
    $text = preg_replace('/\s\s+/', ' ', $text);
    runDebug(__FILE__, __FUNCTION__, __LINE__, "In: $otext Out:$text", 4);
    return trim($text);
  }

  /**
  * function remove_all_punctuation()
  * this function removes all puncutation
  * @param string $text
  * @return string text
  **/
  function remove_all_punctuation($text)
  {
    //runDebug(__FILE__, __FUNCTION__, __LINE__, 'Starting function and setting timestamp.', 2);
    $otext = $text;
    $text = preg_replace('/[^a-zA-Z0-9|+|-|\*|�|�|�|�|�||�|�|�|�|�|�|�|�|�|�|�||�||�|�|�|�|�|�|�|�|�|�|�||�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�]/is', ' ', $text);
    runDebug(__FILE__, __FUNCTION__, __LINE__, "In: $otext Out:$text", 4);
    return $text;
  }

  /**
  * function remove_puncutation()
  * this function removes puncutation (leaves in some required for extra functions
  * @param string $text
  * @return string text
  **/
  function remove_puncutation($text)
  {
    //runDebug(__FILE__, __FUNCTION__, __LINE__, 'Starting function and setting timestamp.', 2);
    $otext = $text;
    $text = preg_replace('/[^a-zA-Z0-9|+|-|*|\/|\.|?|!|�|�|�|�|�||�|�|�|�|�|�|�|�|�|�|�||�||�|�|�|�|�|�|�|�|�|�|�||�|�|�|�|�|�|�|�|�|�|�|�|�|�|�| �|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�|�]/i', ' ', $text);
    runDebug(__FILE__, __FUNCTION__, __LINE__, "In: $otext Out:$text", 4);
    return $text;
  }

  /**
  * function capitalize()
  * this function capitalizes a string
  * @param string $text
  * @return string text
  **/
  function capitalize($text)
  {
    //runDebug(__FILE__, __FUNCTION__, __LINE__, 'Starting function and setting timestamp.', 2);
    $otext = $text;
    $text = strtoupper($text);
    runDebug(__FILE__, __FUNCTION__, __LINE__, "In: $otext Out:$text", 4);
    return $text;
  }

?>