This is a skeleton module only. It contains a basic structure for creating an additional table that displays legacy order data in Magento. It would be a useful building block for a more complete extension.

The use case of this extension would be when you don't want to go through the hassel of importing large amounts of orders from another Magento store or legacy ecommerce platform into the Magento order tables, but you still want the customer to be able to see this data in a flat table.

Feel free to submit PRs and improve on this.

[[images/img1.png]]

--------------

### Installing this extension
```
modman clone https://github.com/tegansnyder/magento-legacy-orders.git
```

### System Configuration
A new section under the System -> Configuration -> Sales tab is added called "Legacy Orders". In this section you can enable/disable configure the text messaging displayed.

[[images/img2.png]]


### Database table format

There is a very generic flat table created by this extension that you can modify the structure of for your own custom data structure. To change the columns edit:
app/code/community/Tegdesign/LegacyOrders/sql/tegdesign_legacyorders_setup/mysql4-install-1.0.0.php

--------------

#### Contribution

To contribute:

This repo uses the [git flow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow) branching model. Pull requests should be issued to the **develop branch**.

--------------

#### The MIT License

Copyright 2015 - Tegan Snyder, All Rights Reserved

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.