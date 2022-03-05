@extends('layouts.main')

@section('container')
<h1 class="d-flex justify-content-center mb-5">Home Page</h1>
<div class="row">
   <div class="col-sm-6 text-left">
     <p class="pKiri">
      Having set aside various incorrect assumptions, let us now turn our
attention to how the this mechanism really works.
We said earlier that this is not an author-time binding but a runtime
binding. It is contextual based on the conditions of the function’s in‐
vocation. this binding has nothing to do with where a function is
declared, but has instead everything to do with the manner in which
the function is called.
When a function is invoked, an activation record, otherwise known
as an execution context, is created. This record contains information
about where the function was called from (the call-stack), how the
function was invoked, what parameters were passed, etc. One of the
properties of this record is the this reference, which will be used for
the duration of that function’s execution.
In the next chapter, we will learn to find a function’s call-site to deter‐
mine how its execution will bind this.
       <br><br>
       this binding is a constant source of confusion for the JavaScript de‐
veloper who does not take the time to learn how the mechanism ac‐
tually works. Guesses, trial and error, and blind copy and paste from
Stack Overflow answers is not an effective or proper way to leverage
this important this mechanism.
To learn this, you first have to learn what this is not, despite any
assumptions or misconceptions that may lead you down those paths.
this is neither a reference to the function itself, nor is it a reference
to the function’s lexical scope.
this is actually a binding that is made when a function is invoked, and
what it references is determined entirely by the call-site where the
function is called.
       <br><br>
       To understand this binding, we have to understand the call-site: the
location in code where a function is called (not where it’s declared).
We must inspect the call-site to answer the question: what is this this
a reference to?
Finding the call-site is generally “go locate where a function is called
from,” but it’s not always that easy, as certain coding patterns can ob‐
scure the true call-site.
What’s important is to think about the call-stack (the stack of functions
that have been called to get us to the current moment in execution).
The call-site we care about is in the invocation before the currently
executing function.
     </p>
     <br>
     Perhaps a somewhat “safer” practice is to pass a specifically set up
object for this that is guaranteed not to be an object that can create
problematic side effects in your program. Borrowing terminology

from networking (and the military), we can create a “DMZ” (de-
militarized zone) object—nothing more special than a completely

empty, nondelegated object (see Chapters 5 and 6).
If we always pass a DMZ object for ignored this bindings we don’t
think we need to care about, we’re sure any hidden/unexpected usage
of this will be restricted to the empty object, which insulates our pro‐
gram’s global object from side effects.
   </div>
   <div class="col-sm-6 text-left">
     <p class="pKanan">It’s quite common that our function callbacks lose their this binding,
      as we’ve just seen. But another way that this can surprise us is when
      the function we’ve passed our callback to intentionally changes the
      this for the call. Event handlers in popular JavaScript libraries are
      quite fond of forcing your callback to have a this that points to, for
      instance, the DOM element that triggered the event. While that may
      sometimes be useful, other times it can be downright infuriating. Un‐
      fortunately, these tools rarely let you choose.
      Either way the this is changed unexpectedly, you are not really in
      control of how your callback function reference will be executed, so
      you have no way (yet) of controlling the call-site to give your intended
      binding. We’ll see shortly a way of “fixing” that problem by fixing the
      this.
       <br><br>
       With implicit binding, as we just saw, we had to mutate the object in
question to include a reference on itself to the function, and use this
property function reference to indirectly (implicitly) bind this to the
object.
But, what if you want to force a function call to use a particular object
for the this binding, without putting a property function reference
on the object?
“All” functions in the language have some utilities available to them
(via their [[Prototype]]—more on that later), which can be useful
for this task. Specifically, functions have call(..) and apply(..)
methods. Technically, JavaScript host environments sometimes pro‐
vide functions that are special enough (a kind way of putting it!) that
they do not have such functionality. But those are few. The vast ma‐
jority of functions provided, and certainly all functions you will create,
do have access to call(..) and apply(..).
How do these utilities work? They both take, as their first parameter,
an object to use for the this, and then invoke the function with that
       <br><br>
       JavaScript has a new operator, and the code pattern to use it looks
basically identical to what we see in those class-oriented languages;
most developers assume that JavaScript’s mechanism is doing some‐
thing similar. However, there really is no connection to class-oriented
functionality implied by new usage in JS.
First, let’s redefine what a “constructor” in JavaScript is. In JS, con‐
structors are just functions that happen to be called with the new op‐
erator in front of them. They are not attached to classes, nor are they
instantiating a class. They are not even special types of functions.
They’re just regular functions that are, in essence, hijacked by the use
of new in their invocation.
For example, consider the Number(..) function acting as a construc‐
tor, quoting from the ES5.1 spec:
15.7.2 The Number Constructor
When Number is called as part of a new expression it is a constructor:
it initialises the newly created object.
So, pretty much any ol’ function, including the built-in object func‐
tions like Number(..) (see Chapter 3) can be called with new in front
of it, and that makes that function call a constructor call. This is an
important but subtle distinction: there’s really no such thing as “con‐
structor functions,” but rather construction calls of functions.
   </div>
 </div>
</div>
</section>
@endsection