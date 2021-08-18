#!/bin/bash
echo "Starting container..."
chown -R 33:33 ./sources
docker-compose up -d