var data = [
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
      "img": "virgin_river.jpg",
      "names": "Virgin River",
      "year": 2022,
      "genre": "Family",
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
      "genre": "Family",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ],
      "link": "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "Grey's_Anatomy.jpg",
      "names": "Grey's Anatomy",
      "year": 2010,
      "genre": "Talk Show",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
  
      ],
      "link": "https://www.youtube.com/watch?v=bd7UQA9laJE"
    },
    {
      "img": "HouseCards.jpg",
      "names": "House of Cards",
      "year": 2019,
      "genre": "Talk Show",
      "director": "Jane Wilson",
      "desc": [
        "Million tonne punch",
        "Damage resistance",
        "Superhuman reflexes"
      ],
      "link": "https://www.youtube.com/watch?v=bd7UQA9laJE"
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
      "link": "https://www.youtube.com/watch?v=bd7UQA9laJE"
    }
  ]

function checkSearchinput() {
    var searchword = document.getElementById("searchKey").value;
    if (searchword == null || searchword == '' || searchword == "" || searchword.indexOf('Please input') >= 0) {
        alert("Please input search word...");
        document.getElementById("searchKey").focus();
        return false;
    }else {
      return true;
    }
}

function to() {
    // console.log(checkSearchinput());
    if (checkSearchinput()) {
        // document.searchform.submit();
        for (var i = 0; i < data.length; i++) {
            const searchInput = document.getElementById("searchKey").value;
            //if match the name or director or desc of movies, link to search page
            if (searchInput == data[i].names || searchInput == data[i].director || searchInput == data[i].desc) {
              window.location.href = "http://localhost:8081/Web_assignment2_Group18/browse.php?search=" + searchInput;
            }
        }
        return true;
    }
    return false;
}