FROM ubuntu:18.04 as os
# make working dir
WORKDIR /usr/src/app
# copy project
COPY . .
# install nodejs and npm
RUN apt-get update &&\
    apt-get install curl -y &&\
    curl -sL https://deb.nodesource.com/setup_14.x | bash - &&\
    apt-get install nodejs -y &&\
    apt-get --purge autoremove curl -y


FROM os as builder
# build project and prisma complied
RUN npm install &&\
    npm install typescript &&\
    npm audit fix &&\
    npm run build 



FROM os as release 

WORKDIR /usr/src/app
# copy node module and dist file to this stage
COPY --from=builder /usr/src/app/dist /usr/src/app/dist
COPY --from=builder /usr/src/app/node_modules /usr/src/app/node_modules
COPY ["package.json", "package-lock.json", "./"]



# If you are building your code for production
# RUN npm ci --only=production

# Bundle app source

EXPOSE 8080
CMD [ "npm", "run","start" ]

