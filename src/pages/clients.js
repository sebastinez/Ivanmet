import * as React from "react"
import { graphql } from "gatsby"
import Layout from "../components/layout"
import Seo from "../components/seo"

// Split an array in equal parts !Done By Copilot :)
const chunk = (array, size) => {
  const chunks = []
  while (array.length) {
    chunks.push(array.splice(0, size))
  }
  return chunks
}

const ClientsPage = ({ data }) => {
  return (
    <Layout>
      <Seo title="IVANMET" />
      <div className="secctionfotos zindex"></div>

      <div className="body-container">
        <div
          className="secctionfotos section-container-fotos"
        ></div>

        <div className="body-container-header">Clientes</div>
        <div className="body-container-text">
          A continuación detallamos los principales clientes a los que tenemos
          el gusto de proveer con nuestros servicios.
          <br />
          Si aún no es cliente nuestro, esperamos pronto contar con Ud.
          <div className="customer-logos">
            {chunk(data.clients.edges, 7).map(slide => {
              return (
                <div className="divSlide">
                  {slide.map(({ node }) => (
                    <div>
                      <img alt="Client Logo"
                        className="imgSlide"
                        src={node.childImageSharp.fluid.srcWebp}
                      />
                    </div>
                  ))}
                </div>
              )
            })}
          </div>
        </div>
      </div>
    </Layout>
  )
}

export default ClientsPage

export const pageQuery = graphql`
  {
    clients: allFile(filter: { relativeDirectory: { eq: "clients" } }) {
      edges {
        node {
          id
          childImageSharp {
            fluid {
              ...GatsbyImageSharpFluid_withWebp
            }
          }
        }
      }
    }
  }
`
