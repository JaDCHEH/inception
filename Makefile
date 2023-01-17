up :
	sudo docker-compose -f ./srcs/docker-compose.yml up -d

down :
	sudo docker-compose -f ./srcs/docker-compose.yml down

ps :
	sudo docker ps

git :
	git add .
	git commit -m "$m"
	git push origin master

clean :
	sudo docker image rm -f $m

logs :
	sudo docker logs $m