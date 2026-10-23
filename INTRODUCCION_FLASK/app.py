#importamos las librerias de los paquetes de flask

from flask import Flask, render_template, request
from werkzeug.security import generate_password_hash, check_password_hash
#cremaos una instancia de neustra aplicacion
app = Flask(__name__)
#Configuramos la conexion a la base de datos MySQL
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'dbflask'
app.config['TEMPLATES_AUTO_RELOAD'] = True  #PERMITE QUE FLASK VUELVA A CARGAR LOS ARCHIVOS HTML CUANDO SE MODIFIQUEN
app.secret_key = 'mysecretkey'  
#Creacion de ruta.La rita / es la ruta ,sera la que se mostrara cuando el procyeto se ejecute en el navegador
@app.route("/")
def home(): #ESTAMOS RETORNANDO EL ARCHIVO HTML login.html DE LA CARPETA TEMPLATE 
    return render_template("login.html")  # Renderiza el archivo login.html
#iniciamos el servidor de desarrollo de Flask en el puerto 5000
@app.route("/registro", methods=['GET', 'POST'])
def registro():
    if request.method == 'POST':
        nombre = request.form['nombre']
        apellido_p= request.form['apellido_p']
        apellido_m = request.form['apellido_m']
        correo = request.form['correo']
        password_hash= request.form['password_hash']
        id_rol = request.form['id_rol']
        password_hasheada = generate_password_hash(password_hash)  # Hashea la contraseña
        
        # Aquí puedes manejar la lógica de registro, como guardar los datos en la base de datos
        return "Registro exitoso"
if __name__ == "__main__":
    app.run(port=5000)
