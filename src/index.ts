import dotenv from 'dotenv'
import express from 'express'
import cors from 'cors'
import morgan from 'morgan'


dotenv.config()

const app = express()
//middlware
app.use(cors())
app.use(morgan('dev'))
app.use(express.json())
app.use(express.urlencoded())

app.get('/', (req:any,res:any)=>{
	    res.json({msg:'hello picachu'})
})


// Start server listening
const port = process.env.PORT || 8080;

app.listen(port,() => {
     console.log(`Express is listening on post`,port)
     })

