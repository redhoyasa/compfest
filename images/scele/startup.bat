@echo off
net use /USER:DATAMHS\%USERNAME% \\152.118.25.17\%USERNAME%
net use h: \\152.118.25.17\%USERNAME%
