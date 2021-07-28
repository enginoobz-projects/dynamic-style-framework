# Dynamic UI  Framework

For the purpose of effortless transforming any projects using CSS for styling (typically websites) with any UI styles,  while providing the flexibility for customization at the runtime. The framework manipulates CSSStyleRule to achieve dynamic customization and PHP for component resusing. 

## Styles   (w/ class names)
### Current
<a id="style-names"></a>
+ Flat: ```flat-style```
+ Neumorphism: ```neu-style```
+ Glassmorphism: ```glass-style```

<details>
<summary><i>Plan</i></summary>
<!--Blank line on purpuse-->

+ Material
+ Skeuomorphism
+ Gradient
+ Neon
+ Cyberpunk
+ Metalic
+ NES/Pixel
+ Grid
+ Windows
+ Monograph
</details>

## Dependencies
  + Bootstrap 4
  + jQuery
  + TinyColor

## Setup (optional)
Skip if just use the framework without modification
1. SCSS
2. PHP: If not use PHP, simply convert into HTML files
3. TypeScript

## Usage
1 - Reference to all of the dependencies CSS & JS.  
2 - Reference to the framework style sheet (after project style sheet):  
```      
  <link rel="stylesheet" href="<framework_folder_path>/css/dynamic-style.css" title="dynamic-style" type="text/css">
  ```  
If the styles are not applied,  the workaroud is importing ```dynamic-style.scss``` or ```dynamic-style.css``` in the project style sheet to compile into one CSS file.  
3 - Add [class name](#style-names) of the first wanted style to ```<body>```. Thoses class names are set in [Config.ts](ts/Config.ts) which are indentical to selectors in init SCSS file.  
Recommend: use Critical to extract critical CSS rules after this step. The rest of styles which are not applied at the first time have many unused rules slowing down page load time.  
4 - Reference to the framework script:  
```  
<script async src="<framework_folder_path>/built/DynamicTheme.js" type="module"></script>
```  
This script can be imported  asynchronously to reduce page time load since the framework also includes sample/init values for each style in CSS files for  website to use at the first time. This means the script could be skipped if just want to apply a pre-defined style without the "dynamic/runtime customization" ability.  
After load, the script will AJAX load ```setting.php``` which is a setting panel for dynamic customization.  
5 - Modify ```setting.php``` file path in [Config.ts](ts/Config.ts) based on the project: ```<framework_folder_path>/php/setting.php```

## Stylizing
### Global
+ Colours: scheme, highlight, classification (3 elements).
+ Border radius
+ Font
### Style Domain
|       #       | Containers |     |       | Elements |        |       |            |      |          |      |        |            |              |        |     |       |  Forms   |       |          |       |        |                   |
| :-----------: | :--------: | --- | ----- | :------: | :----: | ----- | ---------- | ---- | -------- | ---- | ------ | ---------- | ------------ | ------ | --- | ----- | :------: | :---: | -------- | ----- | ------ | ----------------- |
|               |   Image    | Box | Modal |  Alert   | Button | Badge | Breadcrumb | Card | Dropdown | Icon | Navbar | Pagination | Progress bar | Select | Tab | Toast | Checkbox | Input | Textarea | Radio | Switch | Segmented control |
|     Flat      |     ✓      | ✓   |       |          |   ✓    | ✓     |            |      |          |      |        |            | ✓            |        |     |       |    ✓     |   ✓   | ✓        |       |        | ✓                 |
|  Neumorphism  |     ✓      | ✓   |       |          |   ✓    | ✓     |            |      |          |      |        |            | ✓            |        |     |       |    ✓     |   ✓   | ✓        | ✓     | ✓      | ✓                 |
| Glassmorphism |     ✓      | ✓   |       |          |   ✓    | ✓     |            |      |          |      |        |            | ✓            |        |     |       |    ✓     |   ✓   | ✓        |       |        | ✓                 |
