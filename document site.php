<?php

// include the PHPWord library
require_once 'PHPWord.php';

// create a new PHPWord object
$PHPWord = new PHPWord();

// set the document properties
$PHPWord->getProperties()->setCreator('Your Name');
$PHPWord->getProperties()->setCompany('Your Company');
$PHPWord->getProperties()->setTitle('Document Title');

// add a section to the document
$section = $PHPWord->createSection();

// add some text to the section
$section->addText('Hello, world!');

// save the document as a Word file
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');

// prompt the user to download the file
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment;filename="document.docx"');
header('Cache-Control: max-age=0');
$objWriter->save('php://output');

?>
