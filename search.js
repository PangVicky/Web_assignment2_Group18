const data = [
    {
      "img": "DesperateHousewives.jpg",
      "names": "Desperate Housewives",
      "year": 2015,
      "genre": "Comedy",
      "director": "Dan Jukes",
      "desc": [
        "Radiation resistance",
        "Turning tiny",
        "Radiation blast"
      ],
      "link": "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "Friends.jpg",
      "names": "Friends",
      "year": 2007,
      "genre": "Fanmily",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ],
      "link":  "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "Grey's_Anatomy.jpg",
      "names": "Grey's Anatomy",
      "year": 2010,
      "genre": "Show",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
       
       ],
      "link":  "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "HouseCards.jpg",
      "names": "House of Cards",
      "year": 2019,
      "genre": "Show",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ],
      "link":  "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "young_sheldon.jpg",
      "names": "Young Sheldon",
      "year": 2020,
      "genre": "Comedy",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ],
      "link":  "https://www.youtube.com/watch?v=bd7UQA9laJE"
    }
  ]

function showlist(res){
  var tbody = document.querySelector("tbody");
  for (var i=0;i<res.length;i++){
    var obj = res[i];
    var tr= document.createElement('tr');
  //the 1st column show the picture of the video
    var tdpic = document.createElement('img');
    tdpic.setAttribute("Movie Name", obj.names);
    tdpic.setAttribute("src", "images/"+obj.img);
    tdpic.setAttribute("onclick", "clickImage");
    tdpic.onclick = function() {
    window.location.assign(obj.link);
    }
    tr.appendChild(tdpic);
    //the 2nd column show the name of the movies
    var tdname = document.createElement('td');
    console.log(tdname);
    tdname.innerHTML = `${obj.name}`;
    tr.appendChild(tdname);
  //show the year of the movies
    var tdyear = document.createElement('td');
    tdyear.innerHTML = `${obj.year}`;
    tr.appendChild(tdyear);
    //the 3rd column show the Genre
    var tdDesc = document.createElement('td');
    tdDesc.innerHTML = `${obj.desc}`;
    tr.appendChild(tdDesc);

    //finish one row and add it to tbody
    tbody.appendChild(tr);
  }
}

function searchfunc() {
  var input = document.getElementById('searchbar').value;
  if (input != "") {
    var tbody = document.querySelector("tbody");
    tbody.innerHTML = '';
    input = input.toLowerCase();
    var arr = [];
    for (var i = 0; i < data.length; i++) {
      var obj = data[i];
     //if exist, create the table data:column and row
      if (obj.names.toLowerCase().includes(input) || ((obj.desc).indexOf(input) > -1)) {
        arr.push(obj);
      }
    }
    showlist(arr);
  }
}

function getOption(selectObject){
  //set the value of item
  var value = document.getElementById('filter').value.toLowerCase();
  var keyvalue = document.getElementById('searchbar').value.toLowerCase();
  // create the search result first, then filter items  
  var flagsSearch = false;
  var flagFilter = false;
  var arr = [];
  var tbody = document.querySelector("tbody");
  tbody.innerHTML = '';
  for (var i=0;i<data.length;i++){
    var obj = data[i];
    flagsSearch = obj.names.toLowerCase().includes(keyvalue);
    flagFilter = obj.genre.toLowerCase().includes(value);
    if(flagsSearch && flagFilter){
      arr.push(obj);
    }
  }
  showlist(arr);
}

//parse the request and get the search value
function oneValues() {
  var oneValue;
  var url=window.location.search;
  if(url.indexOf("?")!=-1){
    oneValue = url.substring(url.indexOf("=")+1);
  }
  return oneValue;
}

function to() {
  for( var i=0; i < data.length;i++) {
    const searchInput = document.getElementById("searchKey").value;

    //if match the name or director or desc of movies, link to search page
    if(searchInput == data[i].names || searchInput == data[i].director || searchInput == data[i].desc) {
      window.location.href="http://localhost/Web_assignment2_Group18/browse.php?search="+searchInput;
    }
  }
}

function getRequest(){
  var oneValue = oneValues();
  document.getElementById("searchbar").value = oneValue;
  searchfunc();
}

getRequest();