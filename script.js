// this controls the toggle of the bar menu icon
let r = document.getElementById('barIcon');

function barControl(arg) {
  if(arg.style.display === 'block') {
    arg.style.display = 'none';
  } else {
    arg.style.display = 'block';
  }
}

if(r) {
  r.addEventListener('click', () => {
    let x = document.getElementById('menuWrapper');
    let y = document.getElementById('menuWrapperAdmin');
    if(x) {
      barControl(x);
    } else {
      barControl(y);
    }
  })
}




// this controls the login form on the admin login page
const oui = document.getElementById('oui');
const loginForm = document.getElementById('loginForm');
if(oui) {
  oui.addEventListener('click', () => {
    if(loginForm.style.display === 'block') {
      loginForm.style.display = 'none';
    } else {
        loginForm.style.display = 'block';
      }
  })
}


// controls the form to post
const toPost = document.getElementById('toPost');
const postForm = document.getElementById('postForm');
const miniBoard = document.getElementById('miniBoard');
const cancel = document.getElementById('cancel');
if(toPost) {
  toPost.addEventListener('click', () => {
    if(postForm.style.display === 'block') {
      postForm.style.display = 'none';
      miniBoard.style.display = 'block';
    } else {
      postForm.style.display = 'block';
      miniBoard.style.display = 'none';
      cancel.style.display = 'block';

      }
  })
}

// controls the form to create admin
const createAdmin = document.getElementById('createAdmin');
const adminForm = document.getElementById('adminForm');
if(createAdmin) {
  createAdmin.addEventListener('click', () => {
    if(adminForm.style.display === 'block') {
      adminForm.style.display = 'none';
    } else {
      adminForm.style.display = 'block';
      miniBoard.style.display = 'none';
      cancel3.style.display = 'block';

      }
  })
}

// controls the cancel button on the post form page
if(cancel) {
  cancel.addEventListener('click', () => {
    if(postForm.style.display === 'block') {
      postForm.style.display = 'none';
      categoryForm.style.display = 'none';
      miniBoard.style.display = 'block';
      cancel.style.display = 'none';
    }
  })
}

// controls the cancel button on the category form page
const cancel2 = document.getElementById('cancel2');
if(cancel2) {
  cancel2.addEventListener('click', () => {
    if(categoryForm.style.display === 'block') {
      categoryForm.style.display = 'none';
      miniBoard.style.display = 'block';
      cancel2.style.display = 'none';
    }
  })
}

// controls the cancel button on the category form page
const cancel3 = document.getElementById('cancel3');
if(cancel3) {
  cancel3.addEventListener('click', () => {
    if(adminForm.style.display === 'block') {
      adminForm.style.display = 'none';
      miniBoard.style.display = 'block';
      cancel3.style.display = 'none';
    }
  })
}




//controls post submenu
const subMenuPost = document.getElementById('subMenuPost');
const posts = document.getElementById('posts');
const subPosts = document.getElementsByClassName('subPost');
const table = document.getElementById('table');
const tab = document.getElementById('tab');
const dashboard = document.getElementById('dashboard');

// ajax request to show posts by category/type in admin
function showPost(value) {
  var xhttp;
  if (value == "") {
    table.style.display = "none";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      table.innerHTML = this.responseText;
      table.style.display = "block";
      miniBoard.style.display = "none";
        if(tab) {
          tab.style.textAlign = "center";
        }
    }
  };
  xhttp.open("GET", "postsmanager.php?q="+value, true);
  xhttp.send();

}


//controls category menu to show the following ajax response
const allCategories = document.getElementById('allCategories');

// ajax request to show posts by category/type in admin
function showCategory() {
  if(allCategories) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        table.innerHTML = this.responseText;
        table.style.display = "block";
        miniBoard.style.display = "none";
         if(tab) {
          tab.style.textAlign = "center";
        }
      }
    };
    xhttp.open("GET", "categorymanager.php", true);
    xhttp.send();
  }

}


//controls category menu to show the following ajax response
const res = document.getElementById('res');

// ajax request to show posts by category/type in admin
function showRes() {
  if(res) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        table.innerHTML = this.responseText;
        table.style.display = "block";
        miniBoard.style.display = "none";
          if(tab) {
            tab.style.textAlign = "center";
          }
      }
    };
    xhttp.open("GET", "reservemanager.php", true);
    xhttp.send();
  }

}


const allAdmin = document.getElementById('allAdmin');

// ajax request to show posts by category/type in admin
function showAdmin() {
  if(allAdmin) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        table.innerHTML = this.responseText;
        table.style.display = "block";
        miniBoard.style.display = "none";
          if(tab) {
            tab.style.textAlign = "center";
          }
      }
    };
    xhttp.open("GET", "adminmanager.php", true);
    xhttp.send();
  }

}

//controls inbox menu to show the following ajax response
const letterBox = document.getElementById('letterBox');

// ajax request to show posts by category/type in admin
function showInbox() {
  if(letterBox) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        table.innerHTML = this.responseText;
        table.style.display = "block";
        miniBoard.style.display = "none";
          if(tab) {
            tab.style.textAlign = "center";
          }
      }
    };
    xhttp.open("GET", "mesmanager.php", true);
    xhttp.send();
  }

}


// control the form to create a new category / type
const categoryForm = document.getElementById('categoryForm');
const createCategory = document.getElementById('createCategory');
if(createCategory) {
  createCategory.addEventListener('click', () => {
    if(categoryForm.style.display === 'block') {
      categoryForm.style.display = 'none';
    } else {
      categoryForm.style.display = 'block';
      miniBoard.style.display = 'none';
      cancel2.style.display = 'block';

      }
  })
}



if(posts) {
  posts.addEventListener('click', () => {
    if(subMenuPost.style.display === 'block') {
      subMenuPost.style.display = 'none';
    } else {
      subMenuPost.style.display = 'block';
      for(let post of subPosts) {
        post.style.color = 'white';
        post.style.backgroundColor = '#2268c9';
        post.style.textDecoration = 'none';
        post.style.fontSize = '20px';
        post.style.padding = '10px';
      }

      for(let i = 0; i < subPosts.length; i++) {
        subPosts[i].style.color = 'white';
        subPosts[i].style.backgroundColor = '#2268c9';
        subPosts[i].style.textDecoration = 'none';
        subPosts[i].style.fontSize = '20px';
        subPosts[i].style.padding = '10px';
        subPosts[i].style.justifyContent = 'left';

      }
    }
  })
}




// ajax request to show messages

function showMess(value) {
  var xhttp;
  if(value == "") {
    table.innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      table.innerHTML = this.responseText;
      table.style.display = "block";
      miniBoard.style.display = "none";
        if(tab) {
          tab.style.textAlign = "center";
        }
    }
  };
  xhttp.open("GET", "read.php?contactid="+value, true);
  xhttp.send();

}


// controls retour button
function retourner() {
  const retour = document.getElementById('retour');
  if(retour.name == 'message') {
    showInbox();
  }

}













      const inbox = document.getElementById('inbox');
      const reservations = document.getElementById('reservations');
      const msgList = document.getElementById('msgList');
      const rsvList = document.getElementById('rsvList');
      const mainAdmin = document.getElementById('mainAdmin');




      /* ajax code to display messages */
      const text = document.getElementById('text');
    const messages = document.getElementsByClassName('message');


    if(text) {
      text.style.fontSize = '20px';
    }
    for(let message of messages) {
      message.style.backgroundColor = "#224bc7";
      message.style.marginBottom = "20px";
      message.style.color = "white";
      message.style.fontSize = "18px";
      message.style.padding = "5px";
    }





        function showMsg(value) {
          var xhttp;
          if (value == "") {
            text.innerHTML = "";
            return;
          }
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              text.innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "processor.php?q="+value, true);
          xhttp.send();

        }




      /* ajax code to display reservations          const toPost = document.getElementById('toPost');
      const editor = document.getElementById('editor');
      toPost.addEventListener(click, () => {
        if(editor.style.display = none)
      })*/
      const rsv = document.getElementById('rsv');
    const reserves = document.getElementsByClassName('reserve');
    if(rsv) {
      rsv.style.fontSize = '20px';
    }

    for(let reserve of reserves) {
      reserve.style.backgroundColor = "#224bc7";
      reserve.style.marginBottom = "20px";
      reserve.style.color = "white";
      reserve.style.fontSize = "18px";
      reserve.style.padding = "5px";
    }

        function showReservation(id) {
        var xhttp;
        if (id == "") {
            rsv.innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            rsv.innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "rsvprocessor.php?q="+id, true);
        xhttp.send();
        }




      const replyBox = document.getElementById('replyBox');
      function reply(str) {
        if(str = '') {
          notice.innerHTML = 'cannot reply this message';
        } else {
          notice.innerHTML = 'success';
        }

      }
