#!/bin/bash
kubectl apply -f rbac-config.yaml
helm init --service-account tiller --history-max 200 --upgrade
