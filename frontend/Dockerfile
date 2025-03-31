FROM node:22

WORKDIR /var/www/html/frontend

COPY package.json ./
RUN npm install

COPY . .

CMD ["npm", "start"]
