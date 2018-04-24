<?php 
namespace Octo\Timeline\Tests;

use Octo\Timeline\Models\Entries as Entry;

if ( ! class_exists('Entry')) 
    die('There is no hope!');

class PostTest extends Entry
{
    public function testCreateTestEvent()
    {
        return getEntries();
    }
}