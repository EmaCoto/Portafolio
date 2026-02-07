import { defineCollection, z } from "astro:content";

const blog = defineCollection({
  schema: z.object({
    title: z.string(),
    description: z.string().optional(),
    pubDate: z.coerce.date(),
    draft: z.boolean().default(false),
    tags: z.array(z.string()).default([]),
    heroImage: z.string().optional(),
  }),
});

export const collections = { blog };
