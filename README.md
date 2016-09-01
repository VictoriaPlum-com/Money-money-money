# Money, money, money

Write a program that reads a batch of products and calculates the price with and without tax.

Two [phpspec](http://www.phpspec.net) classes are provided:

* `BulkMoneyParserSpec` needs no extra examples adding, the aim is to make this pass.
* `MoneyImmutableSpec` requires examples adding, which again should pass.

Please follow these instructions when writing the classes to make the specs pass:

1. Create code to calculate the prices with and without tax.

2. Provide a convenient way for developers to use your code to get the price with or without tax, i.e.:
    1. in pence without tax
    2. in pounds without tax
    3. in pence with tax
    4. in pounds with tax

3. Deduct any discount from the original price (pre-tax).

4. Apply the tax rate to the price.

N.B. Input prices are in pounds.
