from flask import Flask

app = Flask(__name__)

@app.route("/")
def index():
	return "hello.asdkjlasdjlasdk"

@app.route("/<string:name>")
def hello(name):
	return "Hello" + name