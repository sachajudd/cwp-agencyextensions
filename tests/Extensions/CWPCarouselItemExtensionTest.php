<?php

class CWPCarouselItemExtensionTest extends SapphireTest
{
    /**
     * Ensure that the caption is replaced by a HTML editor for content
     */
    public function testCaptionIsReplacedByContent()
    {
        $carouselItem = new CarouselItem;
        $fields = $carouselItem->getCMSFields();
        $this->assertInstanceOf('HtmlEditorField', $fields->fieldByName('Content'));
        $this->assertNull($fields->fieldByName('Caption'));
    }

    /**
     * Ensure that we have a primary and secondary call to action link/label
     */
    public function testHasCallToActionFields()
    {
        $carouselItem = new CarouselItem;
        $fields = $carouselItem->getCMSFields();

        $this->assertInstanceOf('TextField', $fields->fieldByName('PrimaryCallToActionLabel'));
        $this->assertInstanceOf('TextField', $fields->fieldByName('SecondaryCallToActionLabel'));
    }
}