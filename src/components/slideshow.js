import React from "react"
import { useStaticQuery, graphql } from "gatsby"

const SlideShow = ({ data }) => {
  const [index, setIndex] = React.useState(0);


  // filter by sub-directory name slideshow
  const allImagesQuery = graphql`
    query {
        allFile(filter: {relativeDirectory: {eq: "expertise"}, 
            extension: {regex: "/(jpg)|(png)|(jpeg)/"}}) {
        totalCount
        edges {
            node {
            base
            childImageSharp {
                fluid {
                  ...GatsbyImageSharpFluid
                }
            }
            }
        }
        }
    }
  `
  const {
    allFile: { totalCount, edges: images }, //destructuring
  } = useStaticQuery(allImagesQuery)

  React.useEffect(() => {
    const timer = setInterval(() => {
      if (index === totalCount - 1) { // total number of images minus 1
        setIndex(0);
      } else {
        setIndex(prev => prev + 1);
      }
    }, 3000); //duration
    return () => clearInterval(timer); //cleanup
  }, [index, totalCount]); //compare

  return (
    <>
      <img
        style={{ width: "100%" }}
        src={images[index].node.childImageSharp.fluid.src}
        alt={images[index].node.base.split(".")[0]}
      />
    </>
  )
}

export default SlideShow
