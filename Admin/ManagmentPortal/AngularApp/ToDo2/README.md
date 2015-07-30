toDoList
========

This toDoList is a test of AngularJS coupled with PHP.

Basically, this project is inspired of [ToDoMVC.com](http://todomvc.com), built in an other way and with more features.
Only their CSS is used, all the code is original.
My version is using a SQL database, and all queries are sent from JS to PHP.

I don't really know how this app will be in the end, but I got some really cool ideas ! :)

##Features
- Add a task and set its priority
- Edit / Delete a task
- Remove all the completed ones by clicking on the "Clear" button
- Set the tasks status (completed or not)
- Sort tasks by status (Actives/Completed)
- Check / Uncheck all the tasks with one button

##Changelog

###v0.3
- You can now set the priority of the new tasks using the select input

###v0.2
- Adding a task removal function. They are now deleted from the database using their ID.
- Editing a task is now saving it on the database.
- It's now possible to clear all completed tasks by clicking on the "Clear completed" button. It also counts completed tasks.
- The state of the task (Completed or not) is now saved in the db.

###v0.1
- Add tasks in the database
- Sort your tasks by clicking on different links ("Toutes", "Actives", "Finies")
- Edit your tasks by double-clicking on it (Changes are not saved in the db yet)
- Delete them from the local storage (not yet from the database, but keep calm, v0.2 is coming ! ;) )
- Set them completed or not (surprising, isn't it ? )

##Links
[My portfolio](http://trycatch.fr)

[Demo](http://dev.trycatch.fr/toDoList/)