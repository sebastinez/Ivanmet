import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

export const Footer = () => {
  return (
    <div className="footer">
      <div className="footer-items">
        <div>
          <Link
            to="/privacy#header"
            style={{ textDecoration: "underline", color: "white" }}
          >
            Aviso de privacidad
          </Link>
        </div>
        <div>
          <Link
            to="/terms#header"
            style={{ textDecoration: "underline", color: "white" }}
          >
            Términos y condiciones
          </Link>
        </div>
        <div>
          <a
            href="mailto:ivanmet@ivanmet.com.ar"
            style={{ textDecoration: "underline", color: "white" }}
          >
            Envianos tu CV
          </a>
        </div>
      </div>
      <div className="footer-contact" style={{ color: "White" }}>
        <StaticImage
          src="../images/ivanmet-arg.png"
          className="contactLogo"
          alt="Logo Argentina"
          placeholder="blurred"
          height={65}
        />
        <div>Maipú 859, Piso 3</div>
        <div>
          CP C1006ACK, Capital Federal
          <br />
          Buenos Aires, Argentina
        </div>
        <div style={{ color: "#fff" }}>+54 11 4311 0784</div>
        <div>
          <a
            href="mailto:ivanmet@ivanmet.com.ar"
            style={{ color: "white", textDecoration: "underline" }}
          >
            ivanmet@ivanmet.com.ar
          </a>
        </div>
      </div>
      <div className="footer-contact" style={{ color: "#fff" }}>
        <StaticImage
          src="../images/ivanmet-chile.png"
          className="contactLogo"
          height={65}
          placeholder="blurred"
          alt="Logo Chile"
        />
        <div>Haydeé Arias 769</div>
        <div>
          Pobl. Portal del Estrecho
          <br />
          Punta Arenas, Chile
        </div>
        <div>+56 61 221 0562</div>
        <div>
          <a
            href="mailto:administracion@ivanmetchile.com"
            style={{ color: "white", textDecoration: "underline" }}
          >
            administracion@ivanmetchile.com
          </a>
        </div>
      </div>
      <div className="footer-contact">
        {/* <a href="https://profiles.dunsregistered.com/DunsRegisteredProfileAnywhere.aspx?key1=3139766&PaArea=mail" target="_blank"><img src="./img/dunsSello.jpg" alt="" id="DUNSQR"></a> */}
      </div>
    </div>
  )
}
