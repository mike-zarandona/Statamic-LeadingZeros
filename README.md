# Statamic-LeadingZeros
Add leading zeros to numbers.

## What is this?
This is a variable modifier for [Statamic](http://statamic.com). Use this modifier to add to add leading zeros to your value's output. You can pass in the number of total places you'd like your number to have.

## Examples
The variable
```
// output = 1
{{ output|leadingzeros:3 }}
// 001

// output = 123
{{ output|leadingzeros:5 }}
// 00123

// output = 234
{{ output|leadingzeros:2 }}
// 234
```

## Installation
- Create a new folder inside of your `_add-ons` folder called `leadingzeros`.
- Place `mod.leadingzeros.php` inside `_add-ons/leadingzeros/`.

## Changelog
1.0.0 - Initial release

## Author
Mike Zarandona | [@mikezarandona](http://twitter.com/mikezarandona)
