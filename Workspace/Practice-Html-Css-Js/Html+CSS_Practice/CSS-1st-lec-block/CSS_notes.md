### tag is also called element

### <u>CSS</u>

- Cascading style sheet
- used to decorate the web page
- manage the shapes,sizes ,color,animation,mobile friendliness
- not used for
  - adding programming logic in the website
  - designing web pages

### CSS working 

<img src="css_working.png" alt="css_working" >

<hr>

#### ways to add CSS in html document

- 4 types of CSS
1.  Browser default CSS

     - by default .CSS which is provided by every browser
     - the browser default CSS will be browser specific
     - which is responsible for displaying the default tags
     - h1 will be rendered using biggest font size
     - ul and l1 wil be rendered one after another in vertical orientation
     - generally it is not advised to modify the default CSS.


2.INLINE CSS
    
     - adding the css rules inside  the target tag using style attribute
     - not encouraged to use the inline style
     - e.g 
      <h1 style="color: indigo;"> heading</h1>
     
    
       

     
3. INTERNAL CSS
  -  which is added internally to the page
  -  must be added using style tag in head section
  -  e.g
  ```
  <head>

  <style>       </style>
 
  </head>
  ```

4.EXTERNAL CSS  
 - which is added outside the page
 - linked with the page using 
 ```
 <link > tag
 ```
 - e.g
 ```
   <link rel="stylesheet" 
    href="style1.css">> 
 ```

### Terminoligies

```
  <h1 style="color: indigo;"> heading</h1>
```
 - style: attribute
 - color: css property
 - css property value: indigo;
 - color:indigo: css declaration 

<hr>
<img src="Css_term.png" alt="terminology">

<hr>


1. ### CSS property:

 - used to modifiy the  visual property of a tag
 - 
 - e.g 
  - color,font-family,font-size,border,etc

2. CSS value:
 - value of the property  to be modified
- e.g
 - red s a value
 - 20px is value

3. CSS declaration
 - used to modify the visual appearancve of aUI/tag
 - pair of css property and its value
 - property and its value get separated by colon
 (;)
```
 <h1 style="font-size: 50px;color: lawngreen;"> heading </h1>
```

 - multiple declaration are separated by by semicolon (;)
 - only one declaration need not required to be terminated with (;) (semicoon optional here)
 - e.g
   -  color: red;
   - fint-size: 20px; 
4. CSS declaration block:
 -  collection of multiple declarations
 - starts with {} and end with } 
 - e.g .
    - {
      color: red
      font-size: 30px;
      }  

5. CSS selector:
 - used to select the target elements(tag)
 - e.g
   > div { 
          color: red; }
  
       /* style for all div*/

6. CSS rule
 - also known as CSS ruleset
 - pair of CSS selector and CSS declaration block
 -e.g
  - >     div{color:red; font-size:20px;}





### CSS units
 1. px 
     - stands for  pixels
     - pixels: picture element
     - percentage (%)
    - (em) (/em)
    - degree

# Lecture 9.2

### CSS Selectors types
    
         which selects a target(s)
    
      1. type selector/element selector
      - used to select similar types of element/tags
      - e.g
      
      > div {
        color:red;
            }
            /* div selector will select only div tags*/
      - can be used with internal and external only, not with inline       

      2.multiple type selector

      - also known as a combinator selector
      -it uses a punctuation symbol (,)
      - used to select multiple types of elements
      - e.g.
       div,p,span
       {
        font- size: 20px
       }
       /* all div,p,span will be decorated with font
         size set to 20px */

      3. ID selector

      -  used to target an element based on the id 
       attribute 
       value
      - it uses a pound symbol(#)
      - used to select element with particular id
      - e.g.
        <style>
       div#div-1{color="red";}

       /* here div element with id get targeted*/

       #div-1{color="red";}

       /* and element with id get targetted */

       </style>
      
       <div id="div-1">this is a div</div>   

       4. Class selector

       - used to target element(s) based on the
         class attribute 
       - uses punctuation symbol dot (.)
       - e.g
        - .div-3{color:"red;"} 

        <div class="div-3> </div>

       5.Universal selector

       - used to apply rules on every possible
         element in the page
       - uses punctuation symbol star(*)
       - e.g
        - * { font-family:ariel }  
         /* all elements will use the font as ariel */
      
        5. Attribute Selector

        - used to select element(s) based on the 
           value/type of an attribute
        -  used punctuation symbol square bracket   []    
        - e.g.
         > input[type="text]
         {
           color:red;
         }

         6. Descendent selector
         - used to select the element(s) based on
          the parent-child relationship
         - selects all the element(s) which are
           descendent [appear at any level: child,
            grand-child ..] of parent
         - e.g.
           
           <style>
            div p
            {
              color:red;
            }
            li p {color:blue;}

           <style>
           
            <div>
           <p> para 1 inside div </p>
           <p> para 1 inside div </p>
           
            </div>
            <ul>
           <p> para 1 inside li </p>
           <p> para 1 inside li </p>

           6. Child selector
         - used to select the element(s) based on
          the parent-child relationship
         - selects all the element(s) which are
           direct child elements of parent 

         - e.g.
           
           <style>
            div > p
            {
              color:red;
            }
            /* para whicha re direct child element
              of div will be red
              li p {color:blue;}

           <style>
           
            <div>
           <p> para 1 inside div </p>
           <p> para 1 inside div </p>
           
            </div>
            <ul>
           <p> para 1 inside li </p>
           <p> para 1 inside li </p>






