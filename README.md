# socialpowerblog
Styling of the theme chosen for socialpowerblog

To connect to this repository, proceed as follow in the terminal:

1) choose a place where to store the repository

    $ cd homefolder/documents/projects    e.g.
    
2) copy the content of the github repository in your local folder:

    $ git clone https://github.com/MarcoLurati/socialpowerblog.git
    
3) create your own branch to apply the modifications to the files:

    $ git checkout -b my_branch   (use your name pls, so $ git checkout -b marco e.g.)
    $ git push --set-upstream origin my_branch	(to push your branch in the remote repository)
    
4) now you can normally work to your sketches as usual from processing without caring about the terminal

5) once you are ready to share your sketchs, go back to the terminal and execute the folloing commands:

  	$ git status   (to see all the modifications/add you did)
  
  	$ git add *    (to add all the modification) or  $ git add my_sketch/deep_space.pde   (to add just a specific file)
  
  	$ git commit -m "message"  (insert a comment to keep track of what u did, e.g. "added keyboard control to the sketch")
  
	$ git push   (to push your files into the remote repository to make your files available for everybody)
  

---

Repeat the step 5) each time your sketchs are ready to be released or with new working functionalities

---

Some other userful git commands:

	$ git status    (see what's going on in your files)

	$ git branch    (see all the branches used in the repository)

	$ git checkout marco    (move to someone else branch to see his files and modifications. DON'T DO MODIFICATIONS AT THE MASTER BRANCH !!!)

	$ git resed HEAD my_sketch/sketch.pde   (use this command if you added a file with $ git add ... but you want to remove it from the commit)

---
