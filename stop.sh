#!/bin/bash
export DEVELDIR=`pwd`
docker-compose stop
yes | docker-compose rm
