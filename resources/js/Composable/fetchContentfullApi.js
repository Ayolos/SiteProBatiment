import {onMounted, ref} from 'vue';

export function useContentfulFetch(query) {
    const data = ref(null);
    const isLoading = ref(false);
    const error = ref(null);

    const fetchData = async () => {
        isLoading.value = true;

        const fetchUrl = `https://graphql.contentful.com/content/v1/spaces/${import.meta.env.VITE_CONTENTFUL_SPACE_ID}`;
        const fetchOptions = {
            method: 'POST',
            headers: {
                Authorization: `Bearer ${import.meta.env.VITE_CONTENTFUL_ACCESS_TOKEN}`,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                query: query,
            }),
        };

        try {
            const response = await fetch(fetchUrl, fetchOptions).then((response) => response.json());
            data.value = response?.data ? response?.data : undefined
        } catch (e) {
            error.value = e;
        } finally {
            isLoading.value = false;
        }
    };

    onMounted(async () => {
        await fetchData().then(r => r)
        isLoading.value = false;
    })

    return {data, isLoading, error};
}
