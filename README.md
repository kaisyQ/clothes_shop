# Run Locally
1. Clone the project
```bash
  git clone https://github.com/kaisyQ/simple-jobs
```
2. Move to project directory
```sh
  cd path-to-project
```
## Linux
1. Run command using Make
    
    **Description**

    Command will generate base .env file based on .env.example, install composer and nodejs dependencies
    and run webpack build command 
```sh
    make 
```
2. Run Queue and database docker containers via command
```sh
    docker compose up -d database rabbitmq
```

3. Configure .env variable or config variable for or connection(**Maybe you dont need to do it**)