import * as React from "react"
import Layout from "../components/layout"
import Seo from "../components/seo"

const ContactPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" />
    <div className="body-container">
      <div className="secctionfotos" />
      <div className="body-container-header">Contacto</div>
      <div className="body-container-text">
        <p>
          Por consultas o mayor información sobre nosotros o nuestros servicios
          no dude en contactarnos.
        </p>
        <form className="ui form" action="/" method="POST">
          <div className="field">
            <label htmlFor="name">Nombre</label>
            <input name="nombre" id="name" type="text" required />
          </div>
          <div className="field">
            <label htmlFor="company">Empresa</label>
            <input name="empresa" id="company" type="text" />
          </div>
          <div className="field">
            <label htmlFor="mail">Correo electrónico</label>
            <input name="mail" id="mail" type="email" required />
          </div>
          <div className="field">
            <label htmlFor="phone">Teléfono</label>
            <input name="telefono" id="phone" type="text" required />
          </div>
          <div className="field">
            <label htmlFor="message">Mensaje</label>
            <textarea name="body" id="message" required />
          </div>
          <div className="field">
            <button className="ui button primary" type="submit">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
  </Layout>
)

export default ContactPage
