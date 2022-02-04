# Plotting kmeans
#Import packages
library(ggpubr)
library(factoextra)
data("iris")
df <- iris
head(df, 5)
# calculate the kmeans cluster
# k = 3
set.seed(123)
res.km = kmeans(scale(df[, -5]), 3, nstart = 25)
# show the cluster
res.km$cluster
# to use ggplot we need to reduce the dimensions
# dimensionality reduction
res.pca <- prcomp(df[, -5], scale = TRUE)
# coords of individual
ind.coord <- as.data.frame(get_pca_ind(res.pca)$coord)
# add the clusters
ind.coord$cluster <- factor(res.km$cluster)
ind.coord$Species <-df$Species
head(ind.coord)
# The variance explained by dimensions
eigenvalue <- round(get_eigenvalue(res.pca), 1)
variance.percent <- eigenvalue$variance.percent
head(eigenvalue)
# plotting
ggscatter(
  ind.coord,
  x = "Dim.1",
  y = "Dim.2",
  color = "cluster",
  palette = "npg",
  ellipse = TRUE,
  ellipse.type = "convex",
  shape = "Species",
  size = 1.5,
  legend="right",
  ggtheme=theme_bw(),
  xlab = paste0("Dim 1 (",variance.percent[1],"% )"),
  ylab = paste0("Dim 2 (",variance.percent[2],"% )")+
    stat_mean(aes(color = cluster),size = 4)
)
