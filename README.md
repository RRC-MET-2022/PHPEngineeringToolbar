Hi there fellow stranger!

This webiste has a couple standards that I would like you the reader to follow.

Each section of the webiste (i.e. Fluid Mechanics, Mathamatics) has it's own structure. But for the most part each page is like an islands for the way it is structured.

Current for the standard across the whole website there are a few rules of how to create pages and/or sections.
1. If you are adding a new section please have the following file structure:
    css
      sectionNameStyle.css
    img
      alwayslowercase.png
    includes
      header.php - this file is dicated by the original page in the main directory
      footer.php - same with this file!
    js
      javaScriptDocument.js - anything with js
    index.php - this is the landing page for every section
    
    
2. If you are adding pages for any section please include the following in the page.
  <?php
    //this goes at the very top! 
    include_once 'includes/header.php';
  ?>
  <!-- This is the main body of the web page! -->
  <?php
    //this goes at the very bottom!
    include_once 'includes/footer.php';
  ?>
  
  
3. Each page should follow some system of consistancy i.e.:
  The Fluid Mechanics follows this format (for the most part needs more editing right now!):
    <h1>Title of page</h1>
    <!-- Intro paragraph and initial information needed to understand concept (links to each concept needed). -->
    <h2>Section Titles</h2>
    <!-- Anything goes for format, add good information and examples! -->
    <h2>Equation Table</h2>
    <table class="EquationTB">
      <!-- Equation Table Head -->
      <thead><tr class="EqTBHeader">
          <th><h2>Equation ID</h2></th>
          <th><h2>Equation Name</h2></th>
          <th><h2>Equation</h2></th>
          <th><h2>Requires</h2></th>
          <th><h2>Extends</h2></th>
      </tr></thead>
    </table>
    <h2>Glossary</h2>
    <table>
      <tr>
        <th>Term</th>
        <th>Definition</th>
      </tr>
    </table>
    <h2>References</h2>
    <table>
      <tr>
        <th></th>
      </tr>
    </table>
    
    
4.Eventually we will convert most of the equations into a CRUD database, and other smaller tables in pages into sql elements that can be searched. (this is currently in development feb 4, 20212)


5.Any problems with math need this format:
  <table>
    <tr>
      <th>Math</th>
      <th>Explanation</th>
      <th>References</th>
    </tr>
    <tr>
      <td>$$Use MathJax to show equations in a unified way (use variables rather than numbers as much as possible)!$$</td>
      <td>Using English explain what is going on in the math section and where you are getting your information.</td>
      <td>Have "<a href="">Links<\a>" to anything that you are using like: Equation ID numbers, Constants (like gravity or other numbers), Other relevent information.</td>
    </tr>
  </table>
  
  
6. Any other questions you have contact me using the link on the about me section or just read any footer on any section.

Other than that good luck and have fun!!    
