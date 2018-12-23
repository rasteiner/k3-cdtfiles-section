# Kirby 3 Custom Drag Text Files section plugin
Allows you to specify a custom `dragText` for a files section. This is useful if you want to write a custom "kirbytag" when a file is dragged into a textbox. 

## Installation

### Download a zip
Download [the latest zip](https://github.com/rasteiner/k3-cdtfiles-section/releases/latest) file from the relases tab on github.  
Extract the contents into a folder in your `site/plugins` folder. 

## Use
Replace your `files` section in the blueprint with a `cdtfiles` section. Add the `dragText` property with the a query template:

```yaml
sections:
  boxes:
    type: cdtfiles
    template: imgbox
    dragText: '(imgbox: {{file.filename}})'
```
