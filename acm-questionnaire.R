#--------Analyse des Correspondances Multiples-----------
#-----------------Toutes variables-----------------------

#Libraries
install.packages("ade4", dependencies=TRUE)
library(ade4)
library(RColorBrewer)

#Donnees depuis excel
donnees<-read.table(file("clipboard"),sep="\t",header=TRUE,dec=",")#Matrice des données qualitatives H

#Realisons une ACM avec la fonction dudi.acm
#Etudions les VP
acm<-dudi.acm(donnees) #On retient 5 axes 
acm<-dudi.acm(df = donnees, scannf = FALSE, nf = 5)
screeplot(acm)
summary(acm)
#Cercle des correlations
s.corcircle(acm$co,1,2, clabel = 0.6)
s.corcircle(acm$co,2,3,clabel=0.5)
#comment se repartissent les modalité de chaque varaible
boxplot(acm)
boxplot(acm,2)
boxplot(acm,3)
#Tableau Correlations
#barplot(acm$cr[,1],names.arg=row.names( acm$cr),las=2)
barplot(acm$cr[,1],names.arg=row.names( acm$cr),las=2, main = paste("Axe",1))
barplot(acm$cr[,2],names.arg=row.names( acm$cr),las=2, main = paste("Axe",2))
barplot(acm$cr[,3],names.arg=row.names( acm$cr),las=2, main = paste("Axe",3))
#Planfactoriel variables
s.label(acm$co, clabel = 0.7)

#Librairie
install.packages("remotes")
remotes::install_github("larmarange/JLutils")
library(JLutils)#pour freq

#Planfactoriel indiv
s.label(acm$li, clabel = 0.7)
#s.freq(acm$li)#Rassemblons les indivus identiques
s.value(acm$li, acm$li[, 3], 1, 2,names.arg=row.names( acm$li))#Etude sur 3 axes
s.arrow(acm$co, clabel = 0.6)
s.hist(acm$li, clabel = 0, pch = 15)#on remarque des groupes
s.hist(acm$co, clabel = 0, pch = 15)#on remarque des groupes
#scatter(acm, col = brewer.pal(4, "Set1"))
par(mfrow=c(2,2))
#Etudions la distrubutions des modalités
s.class(acm$li, donnees$Sexe, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Age, col = brewer.pal(4, "Set1"))    
s.class(acm$li, donnees$CatSocioDemo, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Diplome, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Agglo, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Pays, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Instrument, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$SportActuel, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$SportVie, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$UsageOrdi, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$JeuxVideos, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$MemeTemps, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$BougerTtCorps, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Dependences, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$AnxieteMom, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$AnxiétéG, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$Depression, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$EstimeSoi, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$LocInterne, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$AutoefficacitéBool, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$CABool, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$ConfTechno, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$FaciliteUtilisation, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$MotivationUtilisation, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$ConnaissanceAVC, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$EssaiTherapeutique, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$EsthetiqueTherapie, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$FaciliteTherapie, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$ResultatsTherapie, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$LieuTherapie, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$ContactHumain, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$PersoSoignant, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$InfoTherapie, col = brewer.pal(4, "Set1"))
s.class(acm$li, donnees$UtilitePercue, col = brewer.pal(4, "Set1"))

#-----------------Variables selectionnées-----------------------
d<-read.table(file("clipboard"),sep="\t",header=TRUE,dec=",")#Matrice des données qualitatives H
#Libraries
install.packages("FactoMineR", dependencies=TRUE)
library(FactoMineR)
#Donnees depuis excel
d<-read.table(file("clipboard"),sep="\t",header=TRUE,dec=",")#Matrice des données qualitatives H
#ACM
acm2 <- MCA(d, ncp = 5, graph = FALSE)
acm2
acm2$eig
plot(acm2)#individus et variables
#acm3 <- MCA(donnees, ncp = 5, graph = FALSE)
#plot(acm3)
#plot(acm2, axes = c(3, 4))
plot(acm2, choix = "ind", invisible = "ind")#variables
dimdesc(acm2, axes = 1:2)#dimensions, conditions attibués aux axes
plot(acm2, choix = "ind", invisible = "var")#individus
