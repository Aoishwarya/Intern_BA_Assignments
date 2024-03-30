from flask import Flask
from random import randint
from time import sleep
app = Flask(__name__)

@app.route("/")
def index():
    return "Ok"

@app.route("/about")
def about():
    return "Ok"


@app.route("/random")
def rndm():
    sleep(randint(0,2))
    return "Ok"
if __name__ == "__main__":
    app.run()
    