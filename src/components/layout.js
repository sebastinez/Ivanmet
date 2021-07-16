import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

import { Navbar } from "./navbar"
import { Footer } from "./footer"
import "./layout.css"
import "./semantic.css"

const Layout = ({ children }) => {
  return (
    <>
      <div className="header">
        <div id="bgAniversario">
          <div id="textoAniversario">
            MÁS DE 30 AÑOS AL SERVICIO DE LA INDUSTRIA
          </div>
        </div>
        <Link to="/about">
          <StaticImage
            src="../images/ivanmet-arg.png"
            alt="Logo IVANMET"
            layout="fixed"
            height={70}
            imgClassName="logo"
            quality={100}
            className="logoWrapper"
          />
        </Link>
        <div id="bannerDiv">
          <StaticImage src="../images/banner.png" alt="" height={134} />
        </div>
        <div/>
        <div/>
        <div/>
        <div/>
        <div>
          <a href="http://www.wnaweb.com/" target="_blank" rel="noreferrer">
            <StaticImage
              src="../images/WNA.png"
              alt="WNA Logo"
              layout="fixed"
              height={80}
              className="WNALogo"
            />
          </a>
        </div>
        <div>
          <StaticImage
            src="../images/DUNS.png"
            id="DUNSLogo"
            alt=""
            height={50}
            className="DUNSLogo"
          />
        </div>
      </div>
      <Navbar />
      <main>{children}</main>
      <Footer />
    </>
  )
}

export default Layout
