import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

import Layout from "../components/layout"
import Seo from "../components/seo"

const ContactPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" id="contactbg" />
    <div className="body-container">
      <div className="secctionfotos" id="contactprimary" />
      <div className="body-container-header">Contacto</div>
      <div className="body-container-text">
        <p>
          Por consultas o mayor información sobre nosotros o nuestros servicios
          no dude en contactarnos.
        </p>
        <form className="ui form" action="/" method="POST">
          <div className="field">
            <label>Nombre</label>
            <input name="nombre" type="text" required />
          </div>
          <div className="field">
            <label>Empresa</label>
            <input name="empresa" type="text" />
          </div>
          <div className="field">
            <label>Correo electrónico</label>
            <input name="mail" type="email" required />
          </div>
          <div className="field">
            <label>Teléfono</label>
            <input name="telefono" type="text" required />
          </div>
          <div className="field">
            <label>Mensaje</label>
            <textarea name="body" required />
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
