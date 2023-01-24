up :
	docker-compose -f ./srcs/docker-compose.yml up -d

down :
	docker-compose -f ./srcs/docker-compose.yml down

ps :
	docker ps

git :
	git add .
	git commit -m "$m"
	git push origin master

clean :
	docker image rm -f $m

logs :
	docker logs $m

list :
	docker images

exec :
	docker exec -it $c /bin/bash