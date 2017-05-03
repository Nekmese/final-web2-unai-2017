<head>
<style>
body{
  background-color:black;
}
h1{
  color:white;
  font-family:"Times New Roman";
  font-size:50px;
}
p{
 color:white;
  font-family:"Times New Roman"; 
  font-style:italic;
  font-size:20px;
}
img{
  padding:25px;
}
.quotes{
  width:33%;
  margin-right:auto;
  margin-left:auto;
  border-color:white;
  border-style:solid;
  border-radius:5px;
  margin-top:20px;
  padding:20px;
  height:auto;
  color:white;
}
.quotes{
   font-size:30px;
}
.author{
  font-size:15px;
  font-style:italic;
}
</style>
<script>
$(document).ready(function(){
  
  function getQuote(){
    
    var quotes = ["Hello World","Hello Sea","Hello Sky"];
    var author = [".Author1","Author2","Author3"];
  
    var randomNum = Math.floor((Math.random()*quotes.length));
    var randomQuote = quotes[randomNum];
    var randomAuthor = author[randomNum];
   
    $ (".quote").text(randomQuote);
    $ (".author").text(randomAuthor); 
  }  
    $ (".btn").on("click", function(){
      getQuote();
    });
  
});
</script>
</head>

<div class ="container.fluid text-center">
  <h1>Random Quotes Generator</h1>
  <p>Some of my fovorite Quotes</p>
    <img src="https://s3.amazonaws.com/poll-en-uploads/uploads%2F20161108T0950Z_2f83ce9b925a50f96f78e9bf932bc1c3%2FLogoRFclassic2.png"/>
  <br/>
  <button class="btn btn-default" type="submit">New Quotes</button>
<div class="quotes">
  <span class="quote">Hello, World</span>
  <span class="author">-The World</span>
  </div>
</div>
  
  
  
</div>