# Simpledate

Version: 1.0

Author: [Aaron Fowler](http://twitter.com/adfowler)

Simpledate outputs the current date or the page's last modified date using PHP formatting options.

##Installation

Copy the add-on in a folder named 'simpledate' in system/mojomotor/third_party

##Usage

Simpledate has two functions:

    {mojo:simpledate:get}

simply returns the current date.

    {mojo:simpledate:get_last_modified}

returns the page's last modified date.

Both tags accept a format parameter using PHP formatting options:

    {mojo:simpledate:get format="Y-m-d"}

will return something like "2010-08-01"

If no format parameter is used, Simpledate will default to "F j Y" (e.g. August 1 2010).
